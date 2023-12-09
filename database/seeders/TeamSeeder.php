<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [];

        $teams[] = ["code" => "BOS", "name" => "Boston Celtics"];
        $teams[] = ["code" => "BKN", "name" => "Brooklyn Nets"];
        $teams[] = ["code" => "NYK", "name" => "New York Knicks"];
        $teams[] = ["code" => "PHI", "name" => "Philadelphia 76ers"];
        $teams[] = ["code" => "TOR", "name" => "Toronto Raptors"];
        
        $teams[] = ["code" => "CHI", "name" => "Chicago Bulls"];
        $teams[] = ["code" => "CLE", "name" => "Cleveland Cavaliers"];
        $teams[] = ["code" => "DET", "name" => "Detroit Pistons"];
        $teams[] = ["code" => "IND", "name" => "Indiana Pacers"];
        $teams[] = ["code" => "MIL", "name" => "Milwaukee Bucks"];

        $teams[] = ["code" => "ATL", "name" => "Atlanta Hawks"];
        $teams[] = ["code" => "CHA", "name" => "Charlotte Hornets"];
        $teams[] = ["code" => "MIA", "name" => "Miami Heat"];
        $teams[] = ["code" => "ORL", "name" => "Orlando Magic"];
        $teams[] = ["code" => "WAS", "name" => "Washington Wizards"];

        $teams[] = ["code" => "DEN", "name" => "Denver Nuggets"];
        $teams[] = ["code" => "MIN", "name" => "Minnesota Timberwolves"];
        $teams[] = ["code" => "OKC", "name" => "Oklahoma City Thunder"];
        $teams[] = ["code" => "POR", "name" => "Portland Trail Blazers"];
        $teams[] = ["code" => "UTA", "name" => "Utah Jazz"];

        $teams[] = ["code" => "GSW", "name" => "Golden State Warriors"];
        $teams[] = ["code" => "LAC", "name" => "LA Clippers"];
        $teams[] = ["code" => "LAL", "name" => "Los Angeles Lakers"];
        $teams[] = ["code" => "PHX", "name" => "Phoenix Suns"];
        $teams[] = ["code" => "SAC", "name" => "Sacramento Kings"];

        $teams[] = ["code" => "DAL", "name" => "Dallas Mavericks"];
        $teams[] = ["code" => "HOU", "name" => "Houston Rockets"];
        $teams[] = ["code" => "MEM", "name" => "Memphis Grizzlies"];
        $teams[] = ["code" => "NOP", "name" => "New Orleans Pelicans"];
        $teams[] = ["code" => "SAS", "name" => "San Antonio Spurs"];

        Team::insert($teams);
    }
}
