<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        "awayteam_id",
        "hometeam_id"
    ];

    public function awayteam(){
        return $this->hasOne(Team::class, "id", "awayteam_id");
    }

    public function hometeam(){
        return $this->hasOne(Team::class, "id", "hometeam_id");
    }
}
