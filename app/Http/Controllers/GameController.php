<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
use App\Repositories\GameRepository;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
    public function __construct(protected GameRepository $repo) {
        
    }

    public function create(){
        return view("game");
    }

    public function storeGameday(GameRequest $request){
        $start = new DateTime($request->fromDate);
        $end = new DateTime($request->toDate);
        $end = $end->modify('+1 day');
    
        $interval = new DateInterval('P1D');
        $dateRange = new DatePeriod($start, $interval, $end);

        foreach ($dateRange as $date) {
            $date = $date->format('Y-m-d');
            $gamedayResponse = Http::get("https://mobile-statsv2.sportsnet.ca/ticker?league=nba&day=" . $date);

            if (!$gamedayResponse->successful()) {
                return response()->json(["message" => "Gameday {$date} failed"], $gamedayResponse->status());
            }
            sleep(1);
            $games = json_decode(json_encode($gamedayResponse->json()))->data->games;

            foreach ($games as $game) {
                $gameResponse = Http::get("https://mobile-statsv2.sportsnet.ca/livetracker?league=nba&id=" . $game->id);

                if (!$gameResponse->successful()) {
                    redirect()->route("game.create")->with([
                        "error" => $game->visiting_team->short_name . " vs " . $game->home_team->short_name . " request failed"
                    ]);
                }

                $gameData = json_decode(json_encode($gameResponse->json()))->data->game;
                
                $this->repo->store($gameData);
            }
        }
        
        return redirect()->route("game.create", [
            "successful" => "Register gamedays from " . $request->fromDate . " to " . $request->toDate
        ]);

    }
}