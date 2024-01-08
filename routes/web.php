<?php

use App\Http\Controllers\BetController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ScoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BetController::class, "index"])->name("index");
Route::get("/sportline/create", [BetController::class, "create"])->name("line.create");
Route::post("/sportline/store", [BetController::class, "store"])->name("line.store");
Route::delete("/sportline/destroy", [BetController::class, "destroy"])->name("line.destroy");

Route::get('/players', [BetController::class, "index"])->name("players");

Route::get('/games/create', [GameController::class, "create"])->name("game.create");
Route::post("games/store", [GameController::class, "storeGameday"])->name("game.store");