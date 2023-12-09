<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
use App\Models\Game;
use App\Models\Player;
use App\Models\Score;
use App\Models\Stat;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class GameController extends Controller
{
    public function create(){
        return view("game");
    }

    public function store(GameRequest $request) {
        $gameData = $request->validated()["game"];

        $data = json_decode($gameData)->data->game;      

        $teams = Team::whereIn("code", [$data->visiting_team->short_name, $data->home_team->short_name])->get();

        $awayteam = $teams->firstWhere("code", $data->visiting_team->short_name);

        $hometeam = $teams->firstWhere("code", $data->home_team->short_name);
    
        $players = Player::select("id", "external_id", "name")->get();

        DB::beginTransaction();

        $game = Game::create([
            "external_id" => $data->details->id,
            "date" => date("Y-m-d", $data->details->timestamp)
        ]);

        $scoreData = $data->visiting_team->boxscore_totals;

        $awayscore = Score::create([
            "game_id" => $game->id,
            "team_id" => $awayteam->id,
            "type" => "away",
            "pts" => $scoreData->points,
            "ast" => $scoreData->assists,
            "reb" => $scoreData->rebounds_total
        ]);

        $boxscore = array_merge($data->visiting_team->starters, $data->visiting_team->bench);

        $awayPlayers = $players->where("team_id", $awayteam->id);

        $awaystats = [];

        foreach ($boxscore as $playerStat) {
            if (!empty($player = $awayPlayers->firstWhere("external_id", $playerStat->id))){
                $awaystats[] = [
                    "score_id" => $awayscore->id,
                    "player_id" => $player->id,
                    "pts" => $playerStat->points,
                    "ast" => $playerStat->assists,
                    "reb" => $playerStat->rebounds_total,
                ];
            } else if (!empty($player = $players->firstWhere("external_id", $playerStat->id))){
                Player::where("id", $player->id)->update(["team_id" => $awayteam->id]);
                $awaystats[] = [
                    "score_id" => $awayscore->id,
                    "player_id" => $player->id,
                    "pts" => $playerStat->points,
                    "ast" => $playerStat->assists,
                    "reb" => $playerStat->rebounds_total,
                ];
            } else {
                $player = Player::create([
                    "external_id" => $playerStat->id,
                    "name" => $playerStat->first_name . " " . $playerStat->last_name,
                    "team_id" => $awayteam->id
                ]);

                $awaystats[] = [
                    "score_id" => $awayscore->id,
                    "player_id" => $player->id,
                    "pts" => $playerStat->points,
                    "ast" => $playerStat->assists,
                    "reb" => $playerStat->rebounds_total,
                ];
            }
        }

        Stat::insert($awaystats);

        // HOME ==================================================================================

        $scoreData = $data->home_team->boxscore_totals;

        $homescore = Score::create([
            "game_id" => $game->id,
            "team_id" => $hometeam->id,
            "type" => "home",
            "pts" => $scoreData->points,
            "ast" => $scoreData->assists,
            "reb" => $scoreData->rebounds_total
        ]);

        $boxscore = array_merge($data->home_team->starters, $data->home_team->bench);

        $homePlayers = $players->where("team_id", $hometeam->id);

        $homestats = [];

        foreach ($boxscore as $playerStat) {
            if (!empty($player = $homePlayers->firstWhere("external_id", $playerStat->id))){
                $homestats[] = [
                    "score_id" => $homescore->id,
                    "player_id" => $player->id,
                    "pts" => $playerStat->points,
                    "ast" => $playerStat->assists,
                    "reb" => $playerStat->rebounds_total,
                ];
            } else if (!empty($player = $players->firstWhere("external_id", $playerStat->id))){
                Player::where("id", $player->id)->update(["team_id" => $hometeam->id]);
                $homestats[] = [
                    "score_id" => $homescore->id,
                    "player_id" => $player->id,
                    "pts" => $playerStat->points,
                    "ast" => $playerStat->assists,
                    "reb" => $playerStat->rebounds_total,
                ];
            } else {
                $player = Player::create([
                    "external_id" => $playerStat->id,
                    "name" => $playerStat->first_name . " " . $playerStat->last_name,
                    "team_id" => $hometeam->id
                ]);

                $homestats[] = [
                    "score_id" => $homescore->id,
                    "player_id" => $player->id,
                    "pts" => $playerStat->points,
                    "ast" => $playerStat->assists,
                    "reb" => $playerStat->rebounds_total,
                ];
            }
        }

        Stat::insert($homestats);

        
        $homescore->update(["rival_id" => $awayscore->id]);
        $awayscore->update(["rival_id" => $homescore->id]);

        DB::commit();

        return view("game", ["successful" => "Se registro el juego de " . $awayteam->name . " vs " . $hometeam->name]);
    }

    
}


// public function store(Request $request){
    //     $data = $request->validate([
    //         "gamedate" => "required|date",
    //         "homescore" => "required|string",
    //         "hometeam"  => "required|exists:teams,id",
    //         "awayscore" => "required|string",
    //         "awayteam"  => "required|exists:teams,id"
    //     ]);

    //     DB::beginTransaction();

    //     $game = Game::create(["date" => $data["gamedate"]]);

    //     $homescore = explode("\n", trim($data["homescore"]));
    //     $homestats = [];

    //     foreach ($homescore as $score) {
    //         if (
    //             strpos($score, "Did Not Play")
    //             || strpos($score, "Player Suspended")
    //             || strpos($score, "Not With Team")
    //             || strpos($score, "Starters") !== false 
    //             || strpos($score, "Reserves") !== false
    //         ){
    //             continue;
    //         }

    //         $playerstat = explode("\t", trim($score));
    //         $homestats[] = [
    //             "name" => $playerstat[0],
    //             "pts" => $playerstat[19],
    //             "pt3" => $playerstat[5],
    //             "ast" => $playerstat[14],
    //             "reb" => $playerstat[13],
    //         ];
    //     }

    //     $home = end($homestats);
    //     array_pop($homestats);

    //     $homescore = Score::create([
    //         "game_id" => $game->id,
    //         "team_id" => $data["hometeam"],
    //         "rival_id" => null,
    //         "type" => "home",
    //         "pts" => $home["pts"], 
    //         "pt3" => $home["pt3"], 
    //         "ast" => $home["ast"], 
    //         "reb" => $home["reb"],
    //     ]);

    //     $players = 
    //     Player::where("team_id", $data["hometeam"])
    //         ->where(function($query) use ($homestats) {
    //             foreach ($homestats as $stat) {
    //                 $query->orWhere("name", "like", $stat["name"] . "%");
    //             }
    //         })->get();

    //     $homeplayers = null;

    //     foreach($homestats as $stat){
    //         if ($player = $players->firstWhere("name", $stat["name"])){
    //             $player = [
    //                 "score_id" => $homescore->id,
    //                 "player_id" => $player->id,
    //                 "pts" => $stat["pts"],
    //                 "pt3" => $stat["pt3"],
    //                 "ast" => $stat["ast"],
    //                 "reb" => $stat["reb"],
    //             ];

    //             $homeplayers[] = $player;
    //         }
    //     }

    //     Stat::insert($homeplayers);


    //     //away
    //     $awayscore = explode("\n", trim($data["awayscore"]));
    //     $awaystats = [];

    //     foreach ($awayscore as $score) {
    //         if (strpos($score, "Did Not Play") || strpos($score, "Starters") !== false || strpos($score, "Reserves") !== false){
    //             continue;
    //         }

    //         $playerstat = explode("\t", trim($score));
    //         $awaystats[] = [
    //             "name" => $playerstat[0],
    //             "pts" => $playerstat[19],
    //             "pt3" => $playerstat[5],
    //             "ast" => $playerstat[14],
    //             "reb" => $playerstat[13]
    //         ];
    //     }

    //     $away = end($awaystats);
    //     array_pop($awaystats);

    //     $awayscore = Score::create([
    //         "game_id" => $game->id,
    //         "team_id" => $data["awayteam"],
    //         "rival_id" => null,
    //         "type" => "away",
    //         "pts" => $away["pts"], 
    //         "pt3" => $away["pt3"], 
    //         "ast" => $away["ast"], 
    //         "reb" => $away["reb"],
    //     ]);

    //     $players = 
    //     Player::where("team_id", $data["awayteam"])
    //         ->where(function($query) use ($awaystats) {
    //             foreach ($awaystats as $stat) {
    //                 $query->orWhere("name", "like", $stat["name"] . "%");
    //             }
    //         })->get();

    //     $awayplayers = null;

    //     foreach($awaystats as $stat){
    //         if ($player = $players->firstWhere("name", $stat["name"])){
    //             $player = [
    //                 "score_id" => $awayscore->id,
    //                 "player_id" => $player->id,
    //                 "pts" => $stat["pts"],
    //                 "pt3" => $stat["pt3"],
    //                 "ast" => $stat["ast"],
    //                 "reb" => $stat["reb"]
    //             ];

    //             $awayplayers[] = $player;
    //         }
    //     }

    //     Stat::insert($awayplayers);

    //     DB::commit();
    //     $homescore->update(["rival_id" => $awayscore->id]);
    //     $awayscore->update(["rival_id" => $homescore->id]);

 

    //     return view("game.create", ["teams" => Team::orderBy("name")->get(), "success" => true]);
    // }