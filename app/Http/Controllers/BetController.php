<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Schedule;
use App\Models\Stat;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BetController extends Controller
{

    private $teamcodes = [
        "ATL" => "ATL",
        "BKN" => "BKN",
        "BOS" => "BOS",
        "CHA" => "CHA",
        "CHI" => "CHI",
        "CLE" => "CLE",
        "DAL" => "DAL",
        "DEN" => "DEN",
        "DET" => "DET",
        "GSW" => "GSW",
        "HOU" => "HOU",
        "IND" => "IND",
        "LAC" => "LAC",
        "LAL" => "LAL",
        "MEM" => "MEM",
        "MIA" => "MIA",
        "MIL" => "MIL",
        "MIN" => "MIN",
        "NOP" => "NOP",
        "NY" => "NYK",
        "NY\r" => "NYK",
        "OKC" => "OKC",
        "ORL" => "ORL",
        "PHI" => "PHI",
        "PHO" => "PHX",
        "POR" => "POR",
        "SAC" => "SAC",
        "SA" => "SAS",
        "SA\r" => "SAS",
        "TOR" => "TOR",
        "UTH" => "UTA",
        "WAS" => "WAS",
    ];

    public function index(){

        // return Team::with("players.stats")->where("code", "NOP")->get();

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

        DB::beginTransaction();

        $lines = $data["lineboard"];

        $labels = [
            "pts" => "(Puntos)", 
            "ast" => "(Asistencias)", 
            "reb" => "(Rebotes)", 
            "end" => "(Pts + Reb + Ast)",
            "teams" => "Crea Una Apuesta",
        ];

        $ptsPos = strpos($lines, $labels["pts"]) + strlen($labels["pts"]);
        
        $rebPos = strpos($lines, $labels["reb"]) + strlen($labels["reb"]);

        $astPos = strpos($lines, $labels["ast"]) + strlen($labels["ast"]);

        $end = strpos($lines, $labels["end"]) + strlen($labels["end"]);

        $teamPos = strpos($lines, $labels["teams"]) + strlen($labels["teams"]);

        $markets = [];
        
        $markets["pts"] = substr($lines, $ptsPos, $rebPos - $ptsPos);
        
        $markets["reb"] = substr($lines, $rebPos, $astPos - $rebPos);
        
        $markets["ast"] = substr($lines, $astPos, $end - $astPos);

        $teamcodes = explode(" @ ", substr($lines, $teamPos + 2, 9));

        

        $teams = Team::with("players")->whereIn("code", [
            $this->teamcodes[trim($teamcodes[0])], $this->teamcodes[trim($teamcodes[1])]
        ])->get();
        
        $players = $teams->pluck("players");

        $players = $players[0]->concat($players[1]);

        $betlines = [];

        foreach ($players as $player) {
            $betlines[$player->name] = ["id" => $player->id];
        }
        
        $ptslines = trim(str_replace("\r", "", $markets["pts"]));

        $ptslines = explode("\n", $ptslines);

        $countLines = count($ptslines);

        for ($i = 0; $i < $countLines; $i+=12) {
            if (!empty($betlines[$ptslines[$i]])) {
                preg_match("/\d+/", $ptslines[$i+4], $matches);
                $betlines[$ptslines[$i]]["pts"] = $matches[0];
            
            } else {

                $player = collect($players)->filter(function ($player) use ($ptslines, $i) {
                    $shortname = strtoupper(substr($player["name"], 0, 1)) == $ptslines[$i][0];
                    $lastName = stripos($player["name"], explode(" ", $ptslines[$i])[1]) !== false;
                    return $shortname && $lastName;
                })->first();
                
                if (!empty($player)) {
                    preg_match("/\d+/", $ptslines[$i+4], $matches);
                    $betlines[$player->name]["pts"] = $matches[0];
                }
            }
        }


        // // AST =====================================================================================

        $astlines = trim(str_replace("\r", "", $markets["ast"]));

        $astlines = explode("\n", $astlines);

        $countLines = count($astlines);

        for ($i = 0; $i < $countLines; $i+=12) {
            if (!empty($betlines[$astlines[$i]])) {
                preg_match("/\d+/", $astlines[$i+4], $matches);
                $betlines[$astlines[$i]]["ast"] = $matches[0];
            
            } else {
                $player = collect($players)->filter(function ($player) use ($astlines, $i) {
                    $shortname = strtoupper(substr($player["name"], 0, 1)) == $astlines[$i][0];
                    $lastName = stripos($player["name"], explode(" ", $astlines[$i])[1]) !== false;
                    return $shortname && $lastName;
                })->first();
                
                if (!empty($player)) {
                    preg_match("/\d+/", $astlines[$i+4], $matches);
                    $betlines[$player->name]["ast"] = $matches[0];
                }
            }
        }


        // REB ===========================================================================================

        $reblines = trim(str_replace("\r", "", $markets["reb"]));

        $reblines = explode("\n", $reblines);

        $countLines = count($reblines);

        for ($i = 0; $i < $countLines; $i+=12) {
            if (!empty($betlines[$reblines[$i]])) {
                preg_match("/\d+/", $reblines[$i+4], $matches);
                $betlines[$reblines[$i]]["reb"] = $matches[0];
            
            } else {
                $player = collect($players)->filter(function ($player) use ($reblines, $i) {
                    $shortname = strtoupper(substr($player["name"], 0, 1)) == $reblines[$i][0];
                    $lastName = stripos($player["name"], explode(" ", $reblines[$i])[1]) !== false;
                    return $shortname && $lastName;
                })->first();
                
                if (!empty($player)) {
                    preg_match("/\d+/", $reblines[$i+4], $matches);
                    $betlines[$player->name]["reb"] = $matches[0];
                }
            }
        }

        foreach ($betlines as $line){
            Player::where('id', $line["id"])->update([
                "pts" => $line["pts"] ?? 0,
                "ast" => $line["ast"] ?? 0,
                "reb" => $line["reb"] ?? 0,
            ]);
        }

        Schedule::create([
            "awayteam_id" => $teams->firstWhere("code", $this->teamcodes[trim($teamcodes[0])])->id,
            "hometeam_id" => $teams->firstWhere("code", $this->teamcodes[trim($teamcodes[1])])->id
        ]);

        DB::commit();

        return redirect()->route("line.create");

    }


    public function destroy()
    {
        Player::where("id", "!=", 0)->update([
            "pts" => 0,
            "ast" => 0,
            "reb" => 0
        ]);

        Schedule::where("id", "!=", 0)->delete();

        return redirect()->route("line.create");
    }


}
