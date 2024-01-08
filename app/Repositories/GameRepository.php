<?php

namespace App\Repositories;

use App\Models\Game;
use App\Models\Player;
use App\Models\Score;
use App\Models\Stat;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class GameRepository
{
    public function store($data) {

        if (!empty(Game::where("external_id", $data->details->id)->first())){
            return false;
        }

        $teams = Team::whereIn("code", [$data->visiting_team->short_name, $data->home_team->short_name])->get();
        
        $team = [];
        $team["away"] = $teams->firstWhere("code", $data->visiting_team->short_name);
        $team["home"] = $teams->firstWhere("code", $data->home_team->short_name);

        DB::beginTransaction();

        $game = Game::create([
            "external_id" => $data->details->id,
            "date" => date("Y-m-d", $data->details->timestamp)
        ]);

        $boxscores = [];
        $boxscores["away"] = array_merge($data->visiting_team->starters, $data->visiting_team->bench);
        $boxscores["home"] = array_merge($data->home_team->starters, $data->home_team->bench);

        $box = [];
        $box["away"] = $data->visiting_team->boxscore_totals;
        $box["home"] = $data->home_team->boxscore_totals;

        $score = [];
        $stats = [];

        $players = Player::select("id", "external_id", "name")->whereIn("team_id", $team)->get();

        foreach ($boxscores as $key => $boxscore) {
            $score[$key] = Score::create([
                "game_id" => $game->id,
                "team_id" => $team[$key]->id,
                "type" => $key,
                "pts" => $box[$key]->points,
                "ast" => $box[$key]->assists,
                "reb" => $box[$key]->rebounds_total
            ]);

            foreach ($boxscore as $playerStat) {
                $player = $players->where("team_id", $team[$key])->firstWhere("external_id", $playerStat->id);

                if (empty($player)) {
                    if (!empty($player = Player::where("external_id", $playerStat->id)->first())){
                        Player::where("id", $player->id)->update(["team_id" => $team[$key]->id]);
                    } else {
                        $player = Player::create([
                            "external_id" => $playerStat->id,
                            "name" => $playerStat->first_name . " " . $playerStat->last_name,
                            "team_id" => $team[$key]->id
                        ]);
                    }
                }

                if ($playerStat->mins !== "0") {
                    $stats[] = [
                        "score_id" => $score[$key]->id,
                        "player_id" => $player->id,
                        "pts" => $playerStat->points,
                        "ast" => $playerStat->assists,
                        "reb" => $playerStat->rebounds_total,
                    ];
                }
            }
        }
    
        Stat::insert($stats);
        
        $score["away"]->update(["rival_id" => $score["home"]->id]);
        $score["home"]->update(["rival_id" => $score["away"]->id]);

        DB::commit();

        return $team["away"]->name . " vs " . $team["home"]->name;
    }
}