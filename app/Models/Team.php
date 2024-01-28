<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public $timestamps = "false";

    public function players(){
        return $this->hasMany(Player::class, "team_id", "id")->orderBy("name");
    }
}
