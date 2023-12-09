<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [];

        // BOS
        $players[] = ["name" => "Jayson Tatum", "team_id" => 1];
        $players[] = ["name" => "Al Horford", "team_id" => 1];
        $players[] = ["name" => "Jrue Holiday", "team_id" => 1];
        $players[] = ["name" => "Kristaps Porzingis", "team_id" => 1];
        $players[] = ["name" => "Jaylen Brown", "team_id" => 1];
        $players[] = ["name" => "Luke Kornet", "team_id" => 1];
        $players[] = ["name" => "Derrick White", "team_id" => 1];
        $players[] = ["name" => "Svi Mykhailiuk", "team_id" => 1];
        $players[] = ["name" => "Wenyen Gabriel", "team_id" => 1];
        $players[] = ["name" => "Oshae Brissett", "team_id" => 1];
        $players[] = ["name" => "Jay Scrubb", "team_id" => 1];
        $players[] = ["name" => "Payton Pritchard", "team_id" => 1];
        $players[] = ["name" => "Lamar Stevens", "team_id" => 1];
        $players[] = ["name" => "Neemias Queta", "team_id" => 1];
        $players[] = ["name" => "Sam Hauser", "team_id" => 1];
        $players[] = ["name" => "Jordan Schakel", "team_id" => 1];
        $players[] = ["name" => "DJ Steward", "team_id" => 1];
        $players[] = ["name" => "Dalano Banton", "team_id" => 1];
        $players[] = ["name" => "JD Davison", "team_id" => 1];
        $players[] = ["name" => "Jordan Walsh", "team_id" => 1];


        // BKN
        $players[] = ["name" => "Mikal Bridges", "team_id" => 2];
        $players[] = ["name" => "Nic Claxton", "team_id" => 2];
        $players[] = ["name" => "Noah Clowney", "team_id" => 2];
        $players[] = ["name" => "Spencer Dinwiddie", "team_id" => 2];
        $players[] = ["name" => "Kyler Edwards", "team_id" => 2];
        $players[] = ["name" => "Darius Bazley", "team_id" => 2];
        $players[] = ["name" => "Dorian Finney-Smith", "team_id" => 2];
        $players[] = ["name" => "Patrick Gardner", "team_id" => 2];
        $players[] = ["name" => "Harry Giles", "team_id" => 2];
        $players[] = ["name" => "Cameron Johnson", "team_id" => 2];
        $players[] = ["name" => "Scottie Lindsey", "team_id" => 2];
        $players[] = ["name" => "Royce O'Neale", "team_id" => 2];
        $players[] = ["name" => "Day'Ron Sharpe", "team_id" => 2];
        $players[] = ["name" => "Ben Simmons", "team_id" => 2];
        $players[] = ["name" => "Dennis Smith", "team_id" => 2];
        $players[] = ["name" => "Cam Thomas", "team_id" => 2];
        $players[] = ["name" => "Lonnie Walker", "team_id" => 2];
        $players[] = ["name" => "Trendon Watford", "team_id" => 2];
        $players[] = ["name" => "Dariq Whitehead", "team_id" => 2];
        $players[] = ["name" => "Jalen Wilson", "team_id" => 2];
        $players[] = ["name" => "Armoni Brooks", "team_id" => 2];


        // NYK
        $players[] = ["name" => "Julius Randle", "team_id" => 3];
        $players[] = ["name" => "Evan Fournier", "team_id" => 3];
        $players[] = ["name" => "Ryan Arcidiacono", "team_id" => 3];
        $players[] = ["name" => "Josh Hart", "team_id" => 3];
        $players[] = ["name" => "Isaiah Hartenstein", "team_id" => 3];
        $players[] = ["name" => "Jalen Brunson", "team_id" => 3];
        $players[] = ["name" => "Mitchell Robinson", "team_id" => 3];
        $players[] = ["name" => "Donte DiVincenzo", "team_id" => 3];
        $players[] = ["name" => "RJ Barrett", "team_id" => 3];
        $players[] = ["name" => "Dylan Windler", "team_id" => 3];
        $players[] = ["name" => "Charlie Brown", "team_id" => 3];
        $players[] = ["name" => "Isaiah Roby", "team_id" => 3];
        $players[] = ["name" => "DaQuan Jeffries", "team_id" => 3];
        $players[] = ["name" => "Immanuel Quickley", "team_id" => 3];
        $players[] = ["name" => "Nathan Knight", "team_id" => 3];
        $players[] = ["name" => "Jericho Sims", "team_id" => 3];
        $players[] = ["name" => "Quentin Grimes", "team_id" => 3];
        $players[] = ["name" => "Miles McBride", "team_id" => 3];
        $players[] = ["name" => "Duane Washington", "team_id" => 3];
        $players[] = ["name" => "Jacob Toppin", "team_id" => 3];
        $players[] = ["name" => "Jaylen Martin", "team_id" => 3];


         // PHI
        $players[] = ["name" => "Joel Embiid", "team_id" => 4];
        $players[] = ["name" => "P.J. Tucker", "team_id" => 4];
        $players[] = ["name" => "James Harden", "team_id" => 4];
        $players[] = ["name" => "Danny Green", "team_id" => 4];
        $players[] = ["name" => "Patrick Beverley", "team_id" => 4];
        $players[] = ["name" => "Tobias Harris", "team_id" => 4];
        $players[] = ["name" => "Kelly Oubre", "team_id" => 4];
        $players[] = ["name" => "Montrezl Harrell", "team_id" => 4];
        $players[] = ["name" => "Furkan Korkmaz", "team_id" => 4];
        $players[] = ["name" => "Danuel House", "team_id" => 4];
        $players[] = ["name" => "De'Anthony Melton", "team_id" => 4];
        $players[] = ["name" => "Mo Bamba", "team_id" => 4];
        $players[] = ["name" => "Paul Reed", "team_id" => 4];
        $players[] = ["name" => "Tyrese Maxey", "team_id" => 4];
        $players[] = ["name" => "Filip Petrusev", "team_id" => 4];
        $players[] = ["name" => "David Duke", "team_id" => 4];
        $players[] = ["name" => "Javonte Smart", "team_id" => 4];
        $players[] = ["name" => "Jaden Springer", "team_id" => 4];
        $players[] = ["name" => "Terquavion Smith", "team_id" => 4];
        $players[] = ["name" => "Ricky Council", "team_id" => 4];
        $players[] = ["name" => "Azuolas Tubelis", "team_id" => 4];


        // TOR
        $players[] = ["name" => "Pascal Siakam", "team_id" => 5];
        $players[] = ["name" => "Thaddeus Young", "team_id" => 5];
        $players[] = ["name" => "Garrett Temple", "team_id" => 5];
        $players[] = ["name" => "Otto Porter", "team_id" => 5];
        $players[] = ["name" => "Dennis Schroder", "team_id" => 5];
        $players[] = ["name" => "Jakob Poeltl", "team_id" => 5];
        $players[] = ["name" => "O.G. Anunoby", "team_id" => 5];
        $players[] = ["name" => "Chris Boucher", "team_id" => 5];
        $players[] = ["name" => "Gary Trent", "team_id" => 5];
        $players[] = ["name" => "Jalen McDaniels", "team_id" => 5];
        $players[] = ["name" => "Jeff Dowtin", "team_id" => 5];
        $players[] = ["name" => "Malachi Flynn", "team_id" => 5];
        $players[] = ["name" => "Precious Achiuwa", "team_id" => 5];
        $players[] = ["name" => "Makur Maker", "team_id" => 5];
        $players[] = ["name" => "Scottie Barnes", "team_id" => 5];
        $players[] = ["name" => "Christian Koloko", "team_id" => 5];
        $players[] = ["name" => "Javon Freeman-Liberty", "team_id" => 5];
        $players[] = ["name" => "Ron Harper", "team_id" => 5];
        $players[] = ["name" => "Mouhamadou Gueye", "team_id" => 5];
        $players[] = ["name" => "Markquis Nowell", "team_id" => 5];
        $players[] = ["name" => "Gradey Dick", "team_id" => 5];


        // CHI
        $players[] = ["name" => "DeMar DeRozan", "team_id" => 6];
        $players[] = ["name" => "Nikola Vucevic", "team_id" => 6];
        $players[] = ["name" => "Andre Drummond", "team_id" => 6];
        $players[] = ["name" => "Zach LaVine", "team_id" => 6];
        $players[] = ["name" => "Alex Caruso", "team_id" => 6];
        $players[] = ["name" => "Lonzo Ball", "team_id" => 6];
        $players[] = ["name" => "Torrey Craig", "team_id" => 6];
        $players[] = ["name" => "Jevon Carter", "team_id" => 6];
        $players[] = ["name" => "Coby White", "team_id" => 6];
        $players[] = ["name" => "Patrick Williams", "team_id" => 6];
        $players[] = ["name" => "Ayo Dosunmu", "team_id" => 6];
        $players[] = ["name" => "Carlik Jones", "team_id" => 6];
        $players[] = ["name" => "Terry Taylor", "team_id" => 6];
        $players[] = ["name" => "Justin Lewis", "team_id" => 6];
        $players[] = ["name" => "Dalen Terry", "team_id" => 6];
        $players[] = ["name" => "Quenton Jackson", "team_id" => 6];
        $players[] = ["name" => "Julian Phillips", "team_id" => 6];
        $players[] = ["name" => "Adama Sanogo", "team_id" => 6];
        


        // CLE
        $players[] = ["name" => "Donovan Mitchell", "team_id" => 7];
        $players[] = ["name" => "Ricky Rubio", "team_id" => 7];
        $players[] = ["name" => "Tristan Thompson", "team_id" => 7];
        $players[] = ["name" => "Damian Jones", "team_id" => 7];
        $players[] = ["name" => "Caris LeVert", "team_id" => 7];
        $players[] = ["name" => "Georges Niang", "team_id" => 7];
        $players[] = ["name" => "Jarrett Allen", "team_id" => 7];
        $players[] = ["name" => "Zhaire Smith", "team_id" => 7];
        $players[] = ["name" => "Darius Garland", "team_id" => 7];
        $players[] = ["name" => "Ty Jerome", "team_id" => 7];
        $players[] = ["name" => "Dean Wade", "team_id" => 7];
        $players[] = ["name" => "Max Strus", "team_id" => 7];
        $players[] = ["name" => "Sam Merrill", "team_id" => 7];
        $players[] = ["name" => "Isaac Okoro", "team_id" => 7];
        $players[] = ["name" => "Evan Mobley", "team_id" => 7];
        $players[] = ["name" => "Sharife Cooper", "team_id" => 7];
        $players[] = ["name" => "Isaiah Mobley", "team_id" => 7];
        $players[] = ["name" => "Emoni Bates", "team_id" => 7];
        $players[] = ["name" => "Justin Powell", "team_id" => 7];
        $players[] = ["name" => "Pete Nance", "team_id" => 7];
        $players[] = ["name" => "Craig Porter", "team_id" => 7];


        // DET
        $players[] = ["name" => "Bojan Bogdanovic", "team_id" => 8];
        $players[] = ["name" => "Alec Burks", "team_id" => 8];
        $players[] = ["name" => "Joe Harris", "team_id" => 8];
        $players[] = ["name" => "Monte Morris", "team_id" => 8];
        $players[] = ["name" => "Marvin Bagley", "team_id" => 8];
        $players[] = ["name" => "Jontay Porter", "team_id" => 8];
        $players[] = ["name" => "James Wiseman", "team_id" => 8];
        $players[] = ["name" => "Killian Hayes", "team_id" => 8];
        $players[] = ["name" => "Isaiah Stewart", "team_id" => 8];
        $players[] = ["name" => "Zavier Simpson", "team_id" => 8];
        $players[] = ["name" => "Cade Cunningham", "team_id" => 8];
        $players[] = ["name" => "Isaiah Livers", "team_id" => 8];
        $players[] = ["name" => "Jared Rhoden", "team_id" => 8];
        $players[] = ["name" => "Buddy Boeheim", "team_id" => 8];
        $players[] = ["name" => "Jaden Ivey", "team_id" => 8];
        $players[] = ["name" => "Jalen Duren", "team_id" => 8];
        $players[] = ["name" => "Stanley Umude", "team_id" => 8];
        $players[] = ["name" => "Ausar Thompson", "team_id" => 8];
        $players[] = ["name" => "Marcus Sasser", "team_id" => 8];
        $players[] = ["name" => "Tosan Evbuomwan", "team_id" => 8];
        $players[] = ["name" => "Malcolm Cazalon", "team_id" => 8];


        // IND
        $players[] = ["name" => "Daniel Theis", "team_id" => 9];
        $players[] = ["name" => "Buddy Hield", "team_id" => 9];
        $players[] = ["name" => "Myles Turner", "team_id" => 9];
        $players[] = ["name" => "T.J. McConnell", "team_id" => 9];
        $players[] = ["name" => "Craig Sword", "team_id" => 9];
        $players[] = ["name" => "Bruce Brown", "team_id" => 9];
        $players[] = ["name" => "Obi Toppin", "team_id" => 9];
        $players[] = ["name" => "Tyrese Haliburton", "team_id" => 9];
        $players[] = ["name" => "Aaron Nesmith", "team_id" => 9];
        $players[] = ["name" => "Jordan Nwora", "team_id" => 9];
        $players[] = ["name" => "Jalen Smith", "team_id" => 9];
        $players[] = ["name" => "Isaiah Jackson", "team_id" => 9];
        $players[] = ["name" => "Pedro Bradshaw", "team_id" => 9];
        $players[] = ["name" => "Andrew Nembhard", "team_id" => 9];
        $players[] = ["name" => "Bennedict Mathurin", "team_id" => 9];
        $players[] = ["name" => "Kendall Brown", "team_id" => 9];
        $players[] = ["name" => "Jarace Walker", "team_id" => 9];
        $players[] = ["name" => "Oscar Tshiebwe", "team_id" => 9];
        $players[] = ["name" => "Ben Sheppard", "team_id" => 9];
        $players[] = ["name" => "Isaiah Wong", "team_id" => 9];
        $players[] = ["name" => "Darius McGhee", "team_id" => 9];


        // MIL
        $players[] = ["name" => "Giannis Antetokounmpo", "team_id" => 10];
        $players[] = ["name" => "Brook Lopez", "team_id" => 10];
        $players[] = ["name" => "Robin Lopez", "team_id" => 10];
        $players[] = ["name" => "Damian Lillard", "team_id" => 10];
        $players[] = ["name" => "Jae Crowder", "team_id" => 10];
        $players[] = ["name" => "Khris Middleton", "team_id" => 10];
        $players[] = ["name" => "Thanasis Antetokounmpo", "team_id" => 10];
        $players[] = ["name" => "Bobby Portis", "team_id" => 10];
        $players[] = ["name" => "Pat Connaughton", "team_id" => 10];
        $players[] = ["name" => "Cameron Payne", "team_id" => 10];
        $players[] = ["name" => "Malik Beasley", "team_id" => 10];
        $players[] = ["name" => "Marques Bolden", "team_id" => 10];
        $players[] = ["name" => "Lindell Wigginton", "team_id" => 10];
        $players[] = ["name" => "MarJon Beauchamp", "team_id" => 10];
        $players[] = ["name" => "TyTy Washington", "team_id" => 10];
        $players[] = ["name" => "AJ Green", "team_id" => 10];
        $players[] = ["name" => "Drew Timme", "team_id" => 10];
        $players[] = ["name" => "Andre Jackson", "team_id" => 10];
        $players[] = ["name" => "Jazian Gortman", "team_id" => 10];
        $players[] = ["name" => "Chris Livingston", "team_id" => 10];
        $players[] = ["name" => "Omari Moore", "team_id" => 10];


        // ATL
        $players[] = ["name" => "Trae Young", "team_id" => 11];
        $players[] = ["name" => "Patty Mills", "team_id" => 11];
        $players[] = ["name" => "Wesley Matthews", "team_id" => 11];
        $players[] = ["name" => "Clint Capela", "team_id" => 11];
        $players[] = ["name" => "Bogdan Bogdanovic", "team_id" => 11];
        $players[] = ["name" => "Dejounte Murray", "team_id" => 11];
        $players[] = ["name" => "De'Andre Hunter", "team_id" => 11];
        $players[] = ["name" => "Bruno Fernando", "team_id" => 11];
        $players[] = ["name" => "Garrison Mathews", "team_id" => 11];
        $players[] = ["name" => "Onyeka Okongwu", "team_id" => 11];
        $players[] = ["name" => "Saddiq Bey", "team_id" => 11];
        $players[] = ["name" => "Trent Forrest", "team_id" => 11];
        $players[] = ["name" => "Jalen Johnson", "team_id" => 11];
        $players[] = ["name" => "AJ Griffin", "team_id" => 11];
        $players[] = ["name" => "Kobe Bufkin", "team_id" => 11];
        $players[] = ["name" => "Mouhamed Gueye", "team_id" => 11];
        $players[] = ["name" => "Seth Lundy", "team_id" => 11];
        $players[] = ["name" => "Miles Norris", "team_id" => 11];


        // CHA
        $players[] = ["name" => "LaMelo Ball", "team_id" => 12];
        $players[] = ["name" => "Gordon Hayward", "team_id" => 12];
        $players[] = ["name" => "R.J. Hunter", "team_id" => 12];
        $players[] = ["name" => "Terry Rozier", "team_id" => 12];
        $players[] = ["name" => "Edmond Sumner", "team_id" => 12];
        $players[] = ["name" => "Frank Ntilikina", "team_id" => 12];
        $players[] = ["name" => "Miles Bridges", "team_id" => 12];
        $players[] = ["name" => "P.J. Washington", "team_id" => 12];
        $players[] = ["name" => "Cody Martin", "team_id" => 12];
        $players[] = ["name" => "Tre Scott", "team_id" => 12];
        $players[] = ["name" => "Theo Maledon", "team_id" => 12];
        $players[] = ["name" => "Nick Richards", "team_id" => 12];
        $players[] = ["name" => "James Bouknight", "team_id" => 12];
        $players[] = ["name" => "JT Thor", "team_id" => 12];
        $players[] = ["name" => "Mark Williams", "team_id" => 12];
        $players[] = ["name" => "Bryce McGowens", "team_id" => 12];
        $players[] = ["name" => "Jaylen Sims", "team_id" => 12];
        $players[] = ["name" => "Brandon Miller", "team_id" => 12];
        $players[] = ["name" => "Nick Smith", "team_id" => 12];
        $players[] = ["name" => "Amari Bailey", "team_id" => 12];
        $players[] = ["name" => "Leaky Black", "team_id" => 12];
        $players[] = ["name" => "Nathan Mensah", "team_id" => 12];
        $players[] = ["name" => "Angelo Allegri", "team_id" => 12];


        // MIA
        $players[] = ["name" => "Jimmy Butler", "team_id" => 13];
        $players[] = ["name" => "Kyle Lowry", "team_id" => 13];
        $players[] = ["name" => "Kevin Love", "team_id" => 13];
        $players[] = ["name" => "Josh Richardson", "team_id" => 13];
        $players[] = ["name" => "Cheick Diallo", "team_id" => 13];
        $players[] = ["name" => "Bam Adebayo", "team_id" => 13];
        $players[] = ["name" => "Thomas Bryant", "team_id" => 13];
        $players[] = ["name" => "Duncan Robinson", "team_id" => 13];
        $players[] = ["name" => "Haywood Highsmith", "team_id" => 13];
        $players[] = ["name" => "Tyler Herro", "team_id" => 13];
        $players[] = ["name" => "R.J. Hampton", "team_id" => 13];
        $players[] = ["name" => "Caleb Martin", "team_id" => 13];
        $players[] = ["name" => "Dru Smith", "team_id" => 13];
        $players[] = ["name" => "Justin Champagnie", "team_id" => 13];
        $players[] = ["name" => "Cole Swider", "team_id" => 13];
        $players[] = ["name" => "Nikola Jovic", "team_id" => 13];
        $players[] = ["name" => "Orlando Robinson", "team_id" => 13];
        $players[] = ["name" => "Jamal Cain", "team_id" => 13];
        $players[] = ["name" => "Jaime Jaquez", "team_id" => 13];


        //ORL
        $players[] = ["name" => "Franz Wagner", "team_id" => 14];
        $players[] = ["name" => "Gary Harris", "team_id" => 14];
        $players[] = ["name" => "Joe Ingles", "team_id" => 14];
        $players[] = ["name" => "Markelle Fultz", "team_id" => 14];
        $players[] = ["name" => "Jonathan Isaac", "team_id" => 14];
        $players[] = ["name" => "Moritz Wagner", "team_id" => 14];
        $players[] = ["name" => "Wendell Carter", "team_id" => 14];
        $players[] = ["name" => "Chuma Okeke", "team_id" => 14];
        $players[] = ["name" => "Admiral Schofield", "team_id" => 14];
        $players[] = ["name" => "Miye Oni", "team_id" => 14];
        $players[] = ["name" => "Goga Bitadze", "team_id" => 14];
        $players[] = ["name" => "Cole Anthony", "team_id" => 14];
        $players[] = ["name" => "Trevelin Queen", "team_id" => 14];
        $players[] = ["name" => "Kevon Harris", "team_id" => 14];
        $players[] = ["name" => "Mac McClung", "team_id" => 14];
        $players[] = ["name" => "Jalen Suggs", "team_id" => 14];
        $players[] = ["name" => "Paolo Banchero", "team_id" => 14];
        $players[] = ["name" => "Caleb Houstan", "team_id" => 14];
        $players[] = ["name" => "Anthony Black", "team_id" => 14];
        $players[] = ["name" => "Jett Howard", "team_id" => 14];


        // WAS
        $players[] = ["name" => "Kyle Kuzma", "team_id" => 15];
        $players[] = ["name" => "Danilo Gallinari", "team_id" => 15];
        $players[] = ["name" => "Taj Gibson", "team_id" => 15];
        $players[] = ["name" => "Mike Muscala", "team_id" => 15];
        $players[] = ["name" => "Delon Wright", "team_id" => 15];
        $players[] = ["name" => "Tyus Jones", "team_id" => 15];
        $players[] = ["name" => "Landry Shamet", "team_id" => 15];
        $players[] = ["name" => "Xavier Cooks", "team_id" => 15];
        $players[] = ["name" => "Jordan Poole", "team_id" => 15];
        $players[] = ["name" => "Daniel Gafford", "team_id" => 15];
        $players[] = ["name" => "Deni Avdija", "team_id" => 15];
        $players[] = ["name" => "Jared Butler", "team_id" => 15];
        $players[] = ["name" => "Anthony Gill", "team_id" => 15];
        $players[] = ["name" => "Eugene Omoruyi", "team_id" => 15];
        $players[] = ["name" => "Michael Foster", "team_id" => 15];
        $players[] = ["name" => "Corey Kispert", "team_id" => 15];
        $players[] = ["name" => "Johnny Davis", "team_id" => 15];
        $players[] = ["name" => "Ryan Rollins", "team_id" => 15];
        $players[] = ["name" => "Jules Bernard", "team_id" => 15];
        $players[] = ["name" => "Patrick Baldwin", "team_id" => 15];
        $players[] = ["name" => "Bilal Coulibaly", "team_id" => 15];


        // DEN
        $players[] = ["name" => "Nikola Jokic", "team_id" => 16];
        $players[] = ["name" => "DeAndre Jordan", "team_id" => 16];
        $players[] = ["name" => "Reggie Jackson", "team_id" => 16];
        $players[] = ["name" => "Justin Holiday", "team_id" => 16];
        $players[] = ["name" => "Kentavious Caldwell-Pope", "team_id" => 16];
        $players[] = ["name" => "Aaron Gordon", "team_id" => 16];
        $players[] = ["name" => "Jamal Murray", "team_id" => 16];
        $players[] = ["name" => "Vlatko Cancar", "team_id" => 16];
        $players[] = ["name" => "Amida Brimah", "team_id" => 16];
        $players[] = ["name" => "Michael Porter", "team_id" => 16];
        $players[] = ["name" => "Zeke Nnaji", "team_id" => 16];
        $players[] = ["name" => "Braxton Key", "team_id" => 16];
        $players[] = ["name" => "Jay Huff", "team_id" => 16];
        $players[] = ["name" => "Matt Mitchell", "team_id" => 16];
        $players[] = ["name" => "Jamorko Pickett", "team_id" => 16];
        $players[] = ["name" => "Christian Braun", "team_id" => 16];
        $players[] = ["name" => "Peyton Watson", "team_id" => 16];
        $players[] = ["name" => "Collin Gillespie", "team_id" => 16];
        $players[] = ["name" => "Au'Diese Toney", "team_id" => 16];
        $players[] = ["name" => "Julian Strawther", "team_id" => 16];
        $players[] = ["name" => "Jalen Pickett", "team_id" => 16];
        $players[] = ["name" => "Hunter Tyson", "team_id" => 16];


        // MIN
        $players[] = ["name" => "Anthony Edwards", "team_id" => 17];
        $players[] = ["name" => "Mike Conley", "team_id" => 17];
        $players[] = ["name" => "Rudy Gobert", "team_id" => 17];
        $players[] = ["name" => "Kyle Anderson", "team_id" => 17];
        $players[] = ["name" => "Karl-Anthony Towns", "team_id" => 17];
        $players[] = ["name" => "Troy Brown", "team_id" => 17];
        $players[] = ["name" => "Shake Milton", "team_id" => 17];
        $players[] = ["name" => "Jordan McLaughlin", "team_id" => 17];
        $players[] = ["name" => "Nickeil Alexander-Walker", "team_id" => 17];
        $players[] = ["name" => "Naz Reid", "team_id" => 17];
        $players[] = ["name" => "Jaden McDaniels", "team_id" => 17];
        $players[] = ["name" => "Vit Krejci", "team_id" => 17];
        $players[] = ["name" => "Daishen Nix", "team_id" => 17];
        $players[] = ["name" => "Matt Ryan", "team_id" => 17];
        $players[] = ["name" => "Luka Garza", "team_id" => 17];
        $players[] = ["name" => "Josh Minott", "team_id" => 17];
        $players[] = ["name" => "Trevor Keels", "team_id" => 17];
        $players[] = ["name" => "Wendell Moore", "team_id" => 17];
        $players[] = ["name" => "Tyrese Martin", "team_id" => 17];
        $players[] = ["name" => "Leonard Miller", "team_id" => 17];
        $players[] = ["name" => "Javonte Cooke", "team_id" => 17];
        $players[] = ["name" => "Jaylen Clark", "team_id" => 17];


        // OKC
        $players[] = ["name" => "Shai Gilgeous-Alexander", "team_id" => 18];
        $players[] = ["name" => "Josh Giddey", "team_id" => 18];
        $players[] = ["name" => "Davis Bertans", "team_id" => 18];
        $players[] = ["name" => "Victor Oladipo", "team_id" => 18];
        $players[] = ["name" => "Vasilije Micic", "team_id" => 18];
        $players[] = ["name" => "Kenrich Williams", "team_id" => 18];
        $players[] = ["name" => "Luguentz Dort", "team_id" => 18];
        $players[] = ["name" => "Aleksej Pokusevski", "team_id" => 18];
        $players[] = ["name" => "Isaiah Joe", "team_id" => 18];
        $players[] = ["name" => "Tre Mann", "team_id" => 18];
        $players[] = ["name" => "Jeremiah Robinson-Earl", "team_id" => 18];
        $players[] = ["name" => "Aaron Wiggins", "team_id" => 18];
        $players[] = ["name" => "Olivier Sarr", "team_id" => 18];
        $players[] = ["name" => "Lindy Waters", "team_id" => 18];
        $players[] = ["name" => "Jalen Williams", "team_id" => 18];
        $players[] = ["name" => "Jaylin Williams", "team_id" => 18];
        $players[] = ["name" => "Ousmane Dieng", "team_id" => 18];
        $players[] = ["name" => "Chet Holmgren", "team_id" => 18];
        $players[] = ["name" => "Jack White", "team_id" => 18];
        $players[] = ["name" => "Cason Wallace", "team_id" => 18];
        $players[] = ["name" => "Caleb McConnell", "team_id" => 18];
        $players[] = ["name" => "Keyontae Johnson", "team_id" => 18];
        $players[] = ["name" => "Adam Flagler", "team_id" => 18];


        // POR
        $players[] = ["name" => "Jerami Grant", "team_id" => 19];
        $players[] = ["name" => "Malcolm Brogdon", "team_id" => 19];
        $players[] = ["name" => "Deandre Ayton", "team_id" => 19];
        $players[] = ["name" => "Anfernee Simons", "team_id" => 19];
        $players[] = ["name" => "Robert Williams", "team_id" => 19];
        $players[] = ["name" => "Kevin Knox", "team_id" => 19];
        $players[] = ["name" => "Duop Reath", "team_id" => 19];
        $players[] = ["name" => "Matisse Thybulle", "team_id" => 19];
        $players[] = ["name" => "Moses Brown", "team_id" => 19];
        $players[] = ["name" => "Skylar Mays", "team_id" => 19];
        $players[] = ["name" => "Scoot Henderson", "team_id" => 19];
        $players[] = ["name" => "Jabari Walker", "team_id" => 19];
        $players[] = ["name" => "Justin Minaya", "team_id" => 19];
        $players[] = ["name" => "Shaedon Sharpe", "team_id" => 19];
        $players[] = ["name" => "John Butler", "team_id" => 19];
        $players[] = ["name" => "Ibou Badji", "team_id" => 19];
        $players[] = ["name" => "George Conditt", "team_id" => 19];
        $players[] = ["name" => "Rayan Rupert", "team_id" => 19];
        $players[] = ["name" => "Kris Murray", "team_id" => 19];
        $players[] = ["name" => "Toumani Camara", "team_id" => 19];


        // UTA
        $players[] = ["name" => "Lauri Markkanen", "team_id" => 20];
        $players[] = ["name" => "Kelly Olynyk", "team_id" => 20];
        $players[] = ["name" => "Jordan Clarkson", "team_id" => 20];
        $players[] = ["name" => "Kris Dunn", "team_id" => 20];
        $players[] = ["name" => "John Collins", "team_id" => 20];
        $players[] = ["name" => "Collin Sexton", "team_id" => 20];
        $players[] = ["name" => "Romeo Langford", "team_id" => 20];
        $players[] = ["name" => "Talen Horton-Tucker", "team_id" => 20];
        $players[] = ["name" => "Luka Samanic", "team_id" => 20];
        $players[] = ["name" => "Omer Yurtseven", "team_id" => 20];
        $players[] = ["name" => "Josh Christopher", "team_id" => 20];
        $players[] = ["name" => "Micah Potter", "team_id" => 20];
        $players[] = ["name" => "Walker Kessler", "team_id" => 20];
        $players[] = ["name" => "Ochai Agbaji", "team_id" => 20];
        $players[] = ["name" => "Johnny Juzang", "team_id" => 20];
        $players[] = ["name" => "Michael Devoe", "team_id" => 20];
        $players[] = ["name" => "Simone Fontecchio", "team_id" => 20];
        $players[] = ["name" => "Keyonte George", "team_id" => 20];
        $players[] = ["name" => "Taylor Hendricks", "team_id" => 20];
        $players[] = ["name" => "Brice Sensabaugh", "team_id" => 20];
        $players[] = ["name" => "Keshawn Justice", "team_id" => 20];


        // GSW
        $players[] = ["name" => "Stephen Curry", "team_id" => 21];
        $players[] = ["name" => "Chris Paul", "team_id" => 21];
        $players[] = ["name" => "Rudy Gay", "team_id" => 21];
        $players[] = ["name" => "Klay Thompson", "team_id" => 21];
        $players[] = ["name" => "Cory Joseph", "team_id" => 21];
        $players[] = ["name" => "Draymond Green", "team_id" => 21];
        $players[] = ["name" => "Dario Saric", "team_id" => 21];
        $players[] = ["name" => "Andrew Wiggins", "team_id" => 21];
        $players[] = ["name" => "Rodney McGruder", "team_id" => 21];
        $players[] = ["name" => "Kevon Looney", "team_id" => 21];
        $players[] = ["name" => "Gary Payton", "team_id" => 21];
        $players[] = ["name" => "Jerome Robinson", "team_id" => 21];
        $players[] = ["name" => "Jonathan Kuminga", "team_id" => 21];
        $players[] = ["name" => "Moses Moody", "team_id" => 21];
        $players[] = ["name" => "Usman Garuba", "team_id" => 21];
        $players[] = ["name" => "Lester Quinones", "team_id" => 21];
        $players[] = ["name" => "Donovan Williams", "team_id" => 21];
        $players[] = ["name" => "Brandin Podziemski", "team_id" => 21];
        $players[] = ["name" => "Trayce Jackson-Davis", "team_id" => 21];
        $players[] = ["name" => "Kendric Davis", "team_id" => 21];
        $players[] = ["name" => "Javan Johnson", "team_id" => 21];


        // lAC
        $players[] = ["name" => "Kawhi Leonard", "team_id" => 22];
        $players[] = ["name" => "Nicolas Batum", "team_id" => 22];
        $players[] = ["name" => "Russell Westbrook", "team_id" => 22];
        $players[] = ["name" => "Paul George", "team_id" => 22];
        $players[] = ["name" => "Marcus Morris", "team_id" => 22];
        $players[] = ["name" => "Mason Plumlee", "team_id" => 22];
        $players[] = ["name" => "Robert Covington", "team_id" => 22];
        $players[] = ["name" => "Norman Powell", "team_id" => 22];
        $players[] = ["name" => "Ivica Zubac", "team_id" => 22];
        $players[] = ["name" => "Amir Coffey", "team_id" => 22];
        $players[] = ["name" => "Terance Mann", "team_id" => 22];
        $players[] = ["name" => "Kenyon Martin", "team_id" => 22];
        $players[] = ["name" => "Nate Darling", "team_id" => 22];
        $players[] = ["name" => "Bones Hyland", "team_id" => 22];
        $players[] = ["name" => "Joshua Primo", "team_id" => 22];
        $players[] = ["name" => "Brandon Boston", "team_id" => 22];
        $players[] = ["name" => "Xavier Moon", "team_id" => 22];
        $players[] = ["name" => "Moussa Diabate", "team_id" => 22];
        $players[] = ["name" => "Bryson Williams", "team_id" => 22];
        $players[] = ["name" => "Kobe Brown", "team_id" => 22];
        $players[] = ["name" => "Jordan Miller", "team_id" => 22];


        // lAL
        $players[] = ["name" => "LeBron James", "team_id" => 23];
        $players[] = ["name" => "Anthony Davis", "team_id" => 23];
        $players[] = ["name" => "D'Angelo Russell", "team_id" => 23];
        $players[] = ["name" => "Christian Wood", "team_id" => 23];
        $players[] = ["name" => "Taurean Prince", "team_id" => 23];
        $players[] = ["name" => "Jarred Vanderbilt", "team_id" => 23];
        $players[] = ["name" => "Gabe Vincent", "team_id" => 23];
        $players[] = ["name" => "Jaxson Hayes", "team_id" => 23];
        $players[] = ["name" => "Cam Reddish", "team_id" => 23];
        $players[] = ["name" => "Rui Hachimura", "team_id" => 23];
        $players[] = ["name" => "Austin Reaves", "team_id" => 23];
        $players[] = ["name" => "Scotty Pippen", "team_id" => 23];
        $players[] = ["name" => "Max Christie", "team_id" => 23];
        $players[] = ["name" => "Maxwell Lewis", "team_id" => 23];
        $players[] = ["name" => "Jalen Hood-Schifino", "team_id" => 23];
        $players[] = ["name" => "Damion Baugh", "team_id" => 23];
        $players[] = ["name" => "Alex Fudge", "team_id" => 23];
        $players[] = ["name" => "Colin Castleton", "team_id" => 23];
        $players[] = ["name" => "D'Moi Hodge", "team_id" => 23];
        $players[] = ["name" => "Vincent Valerio-Bodon", "team_id" => 23];


        // PHX
        $players[] = ["name" => "Devin Booker", "team_id" => 24];
        $players[] = ["name" => "Kevin Durant", "team_id" => 24];
        $players[] = ["name" => "Eric Gordon", "team_id" => 24];
        $players[] = ["name" => "Bradley Beal", "team_id" => 24];
        $players[] = ["name" => "Jusuf Nurkic", "team_id" => 24];
        $players[] = ["name" => "Damion Lee", "team_id" => 24];
        $players[] = ["name" => "Keita Bates-Diop", "team_id" => 24];
        $players[] = ["name" => "Chimezie Metu", "team_id" => 24];
        $players[] = ["name" => "Drew Eubanks", "team_id" => 24];
        $players[] = ["name" => "Josh Okogie", "team_id" => 24];
        $players[] = ["name" => "Grayson Allen", "team_id" => 24];
        $players[] = ["name" => "Yuta Watanabe", "team_id" => 24];
        $players[] = ["name" => "Bol Bol", "team_id" => 24];
        $players[] = ["name" => "Nassir Little", "team_id" => 24];
        $players[] = ["name" => "Udoka Azubuike", "team_id" => 24];
        $players[] = ["name" => "Saben Lee", "team_id" => 24];
        $players[] = ["name" => "Keon Johnson", "team_id" => 24];
        $players[] = ["name" => "Jordan Goodwin", "team_id" => 24];
        $players[] = ["name" => "Ish Wainright", "team_id" => 24];

        
        // SAC
        $players[] = ["name" => "De'Aaron Fox", "team_id" => 25];
        $players[] = ["name" => "JaVale McGee", "team_id" => 25];
        $players[] = ["name" => "Harrison Barnes", "team_id" => 25];
        $players[] = ["name" => "Alex Len", "team_id" => 25];
        $players[] = ["name" => "Trey Lyles", "team_id" => 25];
        $players[] = ["name" => "Skal Labissiere", "team_id" => 25];
        $players[] = ["name" => "Domantas Sabonis", "team_id" => 25];
        $players[] = ["name" => "Malik Monk", "team_id" => 25];
        $players[] = ["name" => "Sasha Vezenkov", "team_id" => 25];
        $players[] = ["name" => "Kevin Huerter", "team_id" => 25];
        $players[] = ["name" => "Jaylen Nowell", "team_id" => 25];
        $players[] = ["name" => "Jordan Ford", "team_id" => 25];
        $players[] = ["name" => "Chris Duarte", "team_id" => 25];
        $players[] = ["name" => "Davion Mitchell", "team_id" => 25];
        $players[] = ["name" => "Kessler Edwards", "team_id" => 25];
        $players[] = ["name" => "Keon Ellis", "team_id" => 25];
        $players[] = ["name" => "Keegan Murray", "team_id" => 25];
        $players[] = ["name" => "James Akinjo", "team_id" => 25];
        $players[] = ["name" => "Colby Jones", "team_id" => 25];
        $players[] = ["name" => "Jalen Slawson", "team_id" => 25];
        $players[] = ["name" => "Jake Stephens", "team_id" => 25];


        // DAL
        $players[] = ["name" => "Luka Doncic", "team_id" => 26];
        $players[] = ["name" => "Kyrie Irving", "team_id" => 26];
        $players[] = ["name" => "Markieff Morris", "team_id" => 26];
        $players[] = ["name" => "Tim Hardaway", "team_id" => 26];
        $players[] = ["name" => "Seth Curry", "team_id" => 26];
        $players[] = ["name" => "Dante Exum", "team_id" => 26];
        $players[] = ["name" => "Dwight Powell", "team_id" => 26];
        $players[] = ["name" => "Maxi Kleber", "team_id" => 26];
        $players[] = ["name" => "Richaun Holmes", "team_id" => 26];
        $players[] = ["name" => "Derrick Jones", "team_id" => 26];
        $players[] = ["name" => "Grant Williams", "team_id" => 26];
        $players[] = ["name" => "Josh Green", "team_id" => 26];
        $players[] = ["name" => "Jaden Hardy", "team_id" => 26];
        $players[] = ["name" => "Greg Brown", "team_id" => 26];
        $players[] = ["name" => "A.J. Lawson", "team_id" => 26];
        $players[] = ["name" => "Taze Moore", "team_id" => 26];
        $players[] = ["name" => "Dereck Lively", "team_id" => 26];
        $players[] = ["name" => "Olivier-Maxence Prosper", "team_id" => 26];
        $players[] = ["name" => "Dexter Dennis", "team_id" => 26];

        
        // HOU
        $players[] = ["name" => "Jalen Green", "team_id" => 27];
        $players[] = ["name" => "Jeff Green", "team_id" => 27];
        $players[] = ["name" => "Reggie Bullock", "team_id" => 27];
        $players[] = ["name" => "Boban Marjanovic", "team_id" => 27];
        $players[] = ["name" => "Fred VanVleet", "team_id" => 27];
        $players[] = ["name" => "Dillon Brooks", "team_id" => 27];
        $players[] = ["name" => "Aaron Holiday", "team_id" => 27];
        $players[] = ["name" => "Jock Landale", "team_id" => 27];
        $players[] = ["name" => "Jae'Sean Tate", "team_id" => 27];
        $players[] = ["name" => "Kevin Porter", "team_id" => 27];
        $players[] = ["name" => "Nate Hinton", "team_id" => 27];
        $players[] = ["name" => "Darius Days", "team_id" => 27];
        $players[] = ["name" => "Alperen Sengun", "team_id" => 27];
        $players[] = ["name" => "Jabari Smith", "team_id" => 27];
        $players[] = ["name" => "Tari Eason", "team_id" => 27];
        $players[] = ["name" => "Trevor Hudgins", "team_id" => 27];
        $players[] = ["name" => "Jermaine Samuels", "team_id" => 27];
        $players[] = ["name" => "Jeenathan Williams", "team_id" => 27];
        $players[] = ["name" => "Amen Thompson", "team_id" => 27];
        $players[] = ["name" => "Cam Whitmore", "team_id" => 27];
        $players[] = ["name" => "Matthew Mayer", "team_id" => 27];
        

        // MEM
        $players[] = ["name" => "Ja Morant", "team_id" => 28];
        $players[] = ["name" => "Derrick Rose", "team_id" => 28];
        $players[] = ["name" => "Steven Adams", "team_id" => 28];
        $players[] = ["name" => "Marcus Smart", "team_id" => 28];
        $players[] = ["name" => "Shaquille Harrison", "team_id" => 28];
        $players[] = ["name" => "Luke Kennard", "team_id" => 28];
        $players[] = ["name" => "Mychal Mulder", "team_id" => 28];
        $players[] = ["name" => "Jaren Jackson", "team_id" => 28];
        $players[] = ["name" => "Brandon Clarke", "team_id" => 28];
        $players[] = ["name" => "John Konchar", "team_id" => 28];
        $players[] = ["name" => "Desmond Bane", "team_id" => 28];
        $players[] = ["name" => "Xavier Tillman", "team_id" => 28];
        $players[] = ["name" => "Ziaire Williams", "team_id" => 28];
        $players[] = ["name" => "Matthew Hurt", "team_id" => 28];
        $players[] = ["name" => "Santi Aldama", "team_id" => 28];
        $players[] = ["name" => "Jake LaRavia", "team_id" => 28];
        $players[] = ["name" => "David Roddy", "team_id" => 28];
        $players[] = ["name" => "Kenneth Lofton", "team_id" => 28];
        $players[] = ["name" => "Vince Williams", "team_id" => 28];
        $players[] = ["name" => "Jacob Gilyard", "team_id" => 28];
        $players[] = ["name" => "GG Jackson", "team_id" => 28];
        

        // NOP
        $players[] = ["name" => "Zion Williamson", "team_id" => 29];
        $players[] = ["name" => "Jonas Valanciunas", "team_id" => 29];
        $players[] = ["name" => "CJ McCollum", "team_id" => 29];
        $players[] = ["name" => "Cody Zeller", "team_id" => 29];
        $players[] = ["name" => "Larry Nance", "team_id" => 29];
        $players[] = ["name" => "Brandon Ingram", "team_id" => 29];
        $players[] = ["name" => "Malcolm Hill", "team_id" => 29];
        $players[] = ["name" => "Kaiser Gates", "team_id" => 29];
        $players[] = ["name" => "Naji Marshall", "team_id" => 29];
        $players[] = ["name" => "Kira Lewis", "team_id" => 29];
        $players[] = ["name" => "Dyson Daniels", "team_id" => 29];
        $players[] = ["name" => "Trey Murphy", "team_id" => 29];
        $players[] = ["name" => "Herbert Jones", "team_id" => 29];
        $players[] = ["name" => "Jose Alvarado", "team_id" => 29];
        $players[] = ["name" => "Jalen Crutcher", "team_id" => 29];
        $players[] = ["name" => "E.J. Liddell", "team_id" => 29];
        $players[] = ["name" => "Dereon Seabron", "team_id" => 29];
        $players[] = ["name" => "Jordan Hawkins", "team_id" => 29];
        $players[] = ["name" => "Landers Nolley", "team_id" => 29];
        $players[] = ["name" => "Tevian Jones", "team_id" => 29];
        $players[] = ["name" => "Trey Jemison", "team_id" => 29];


        // SAS
        $players[] = ["name" => "Victor Wembanyama", "team_id" => 30];
        $players[] = ["name" => "Doug McDermott", "team_id" => 30];
        $players[] = ["name" => "Khem Birch", "team_id" => 30];
        $players[] = ["name" => "Cedi Osman", "team_id" => 30];
        $players[] = ["name" => "Zach Collins", "team_id" => 30];
        $players[] = ["name" => "Devonte' Graham", "team_id" => 30];
        $players[] = ["name" => "Keldon Johnson", "team_id" => 30];
        $players[] = ["name" => "Charles Bassey", "team_id" => 30];
        $players[] = ["name" => "Tre Jones", "team_id" => 30];
        $players[] = ["name" => "Devin Vassell", "team_id" => 30];
        $players[] = ["name" => "Sandro Mamukelashvili", "team_id" => 30];
        $players[] = ["name" => "Blake Wesley", "team_id" => 30];
        $players[] = ["name" => "Malaki Branham", "team_id" => 30];
        $players[] = ["name" => "Dominick Barlow", "team_id" => 30];
        $players[] = ["name" => "Jeremy Sochan", "team_id" => 30];
        $players[] = ["name" => "Julian Champagnie", "team_id" => 30];
        $players[] = ["name" => "Sidy Cissoko", "team_id" => 30];
        $players[] = ["name" => "Charles Bediako", "team_id" => 30];
        $players[] = ["name" => "Sir'Jabari Rice", "team_id" => 30];

        Player::insert($players);

    }
}
