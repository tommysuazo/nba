<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "name",
        "team_id",
        "external_id",
        "pts",
        "ast",
        "reb"
    ];

    public function stats(){
        return $this->hasMany(Stat::class, "player_id", "id")->orderBy("id", "desc");
    }
}
