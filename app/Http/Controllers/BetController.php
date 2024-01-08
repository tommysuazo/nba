<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Schedule;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BetController extends Controller
{
    public function index(){
        // return Stat::join("players", "players.id", "stats.player_id")->select(["stats.*", "players.name"])->orderBy("id", "desc")->take(100)->get();

        $games = Schedule::query()
            ->select([
                "schedules.id",
                "schedules.awayteam_id",
                "schedules.hometeam_id",
                "schedules.created_at",
            ])
            ->with([
                "awayteam.players" => function ($query) {
                    $query->where('pts', '>', 0)->orWhere('ast', '>', 0)->orWhere('reb', '>', 0)->with("stats");
                },
                "hometeam.players" => function ($query) {
                    $query->where('pts', '>', 0)->orWhere('ast', '>', 0)->orWhere('reb', '>', 0)->with("stats");
                }
            ])->get();

        return view("index", [
            "games" => $games
        ]);
            
    }

    public function create(){
        return view("betline");
    }


    public function store(Request $request){
        $data = $request->validate([
            "lineboard" => "required|string"
        ]);

        Player::where("id", "!=", 0)->update([
            "pts" => 0,
            "ast" => 0,
            "reb" => 0
        ]);

        Schedule::where("id", "!=", 0)->delete();
        
        $labels = [
            "pts" => "Más/Menos (Puntos)",
            "reb" => "Más/Menos (Rebotes)",
            "ast" => "Más/Menos (Asistencias)",
            "end" => "Más/Menos (Pts + Reb + Ast)"
        ];

        $lineboard = str_replace("\r\n", "|",  $data["lineboard"]) ;

        $ptsPos = strpos($lineboard, $labels["pts"]) + strlen($labels["pts"]);
        
        $rebPos = strpos($lineboard, $labels["reb"]) + strlen($labels["reb"]);

        $astPos = strpos($lineboard, $labels["ast"]) + strlen($labels["ast"]);

        $end = strpos($lineboard, $labels["end"]) + strlen($labels["end"]);

        $markets = [];

        $markets["pts"] = explode("||", substr($lineboard, $ptsPos + 2, $rebPos - $ptsPos));

        $markets["reb"] = explode("||", substr($lineboard, $rebPos + 2, $astPos - $rebPos));
        
        $markets["ast"] = explode("||", substr($lineboard, $astPos + 2, $end - $astPos));

        $teamPosition = [];
        $teamNames = [];
        $games = [];

        foreach ($markets as $key => $market) {
            foreach ($market as $index => $value) {
                if (stripos($value, "@") !== false) {
                    $teamPosition[$key][] = $index;
                    
                    if ($key === "pts"){
                        $games[] = explode(" @ ", trim($value));
                        $teamNames[] = end($games)[0];
                        $teamNames[] = end($games)[1];
                    }
                }
            }
        }

        $gameMarkets = [];

        foreach ($teamPosition as $key => $position) {
            for ($i = 0; $i < count($position)-1; $i++) { 
                $gameMarkets[$key][] = array_slice($markets[$key], $position[$i] + 2, $position[$i+1] - 2 - $position[$i]);
            }
            $gameMarkets[$key][] = array_slice($markets[$key], end($position) + 2, count($markets[$key]) - end($position) - 4);
        }

        $teams = Team::with("players")->whereIn("name", $teamNames)->get();

        DB::beginTransaction();

        $betlines = [];

        foreach ($games as $index => $game) {
            $players = $teams->whereIn("name", $game)->pluck("players");
            $players = $players[0]->concat($players[1]);

            foreach ($players as $player) {
                $betlines[$player->name] = ["id" => $player->id];
            }

            $lines = [];
            $count = [];

            $lines["pts"] = $gameMarkets["pts"][$index];
            $lines["ast"] = $gameMarkets["ast"][$index];
            $lines["reb"] = $gameMarkets["reb"][$index];
            $count["pts"] = count($lines["pts"]);
            $count["ast"] = count($lines["ast"]);
            $count["reb"] = count($lines["reb"]);

            foreach ($lines as $key => $line) {
                for ($i = 0; $i < $count[$key]; $i+=6) {
                    $name = $line[$i];

                    if (empty($betlines[$name])) {
                        $firstName = $name[0];
                        $lastName = explode(" ", $name)[1];

                        $player = $players->filter(function ($player) use ($firstName, $lastName) {
                            return $firstName === $player->name[0] && stripos($player->name, $lastName) !== false;
                        })->first();

                        $name = $player->name ?? null;
                    }

                    if (!empty($name)){
                        preg_match("/\d+/", $line[$i+2], $matches);
                        $betlines[$name][$key] = $matches[0];
                    }
                }
            }

            Schedule::create([
                "awayteam_id" => $teams->firstWhere("name", $game[0])->id,
                "hometeam_id" => $teams->firstWhere("name", $game[1])->id
            ]);
        }

        foreach ($betlines as $name => $line) {
            Player::where('id', $line["id"])->update([
                "pts" => $line["pts"] ?? 0,
                "ast" => $line["ast"] ?? 0,
                "reb" => $line["reb"] ?? 0
            ]);
        }

        DB::commit();

        return redirect()->route("line.create");

    }


}
