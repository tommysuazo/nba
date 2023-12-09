<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "game_id",
        "team_id",
        "rival_id",
        "type",
        "pts",
        "ast",
        "reb",
    ];
}
