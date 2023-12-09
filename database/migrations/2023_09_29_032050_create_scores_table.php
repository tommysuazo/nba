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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("game_id")->nullable();
            $table->unsignedBigInteger("team_id")->nullable();
            $table->unsignedBigInteger("rival_id")->nullable();
            $table->enum("type", ["home", "away"]);
            $table->unsignedTinyInteger("pts");
            $table->unsignedTinyInteger("ast");
            $table->unsignedTinyInteger("reb");

            $table->foreign("game_id")->references('id')->on('games')
                ->onDelete("cascade")->onUpdate("set null");

            $table->foreign("team_id")->references('id')->on('teams')
                ->onDelete("cascade")->onUpdate("set null");

            $table->foreign("rival_id")->references('id')->on('scores')
                ->onDelete("cascade")->onUpdate("set null");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
