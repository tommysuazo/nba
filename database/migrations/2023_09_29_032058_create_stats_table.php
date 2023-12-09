<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("score_id");
            $table->unsignedBigInteger("player_id");
            $table->unsignedTinyInteger("pts");
            $table->unsignedTinyInteger("ast");
            $table->unsignedTinyInteger("reb");

            $table->foreign("score_id")->references("id")->on("scores")
                ->onUpdate("cascade")->onDelete("cascade");

            $table->foreign("player_id")->references("id")->on("players")
                ->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stats');
    }
};
