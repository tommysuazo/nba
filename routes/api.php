<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\OutController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("teams")->group(function(){
    Route::get("/{id}", [TeamController::class, "show"]);
    Route::post("update_stats", [TeamController::class, "updateStats"]);
});

Route::prefix("players")->group(function(){
    Route::get("/{id}", [PlayerController::class, "show"]);
    Route::post("/create", [PlayerController::class, "store"]);
    Route::put("/update", [PlayerController::class, "update"]);
});

Route::prefix("games")->group(function(){
    Route::get("/{id}", [GameController::class, "show"]);
    Route::post("/update", [GameController::class, "update"]);
    Route::delete("/destroy", [GameController::class, "destroy"]);
});

Route::prefix("scores")->group(function(){
    Route::get("/{id}", [ScoreController::class, "show"]);
    Route::post("/create", [ScoreController::class, "store"]);
    Route::post("/update", [ScoreController::class, "update"]);
    Route::delete("/destroy", [ScoreController::class, "destroy"]);
});

Route::prefix("stats")->group(function(){
    Route::get("/{id}", [StatController::class, "show"]);
    Route::post("/create", [StatController::class, "store"]);
    Route::post("/update", [StatController::class, "update"]);
    Route::delete("/destroy", [StatController::class, "destroy"]);
});

Route::prefix("outs")->group(function(){
    Route::get("/{id}", [OutController::class, "show"]);
    Route::post("/create", [OutController::class, "store"]);
    Route::post("/update", [OutController::class, "update"]);
    Route::delete("/destroy", [OutController::class, "destroy"]);
});