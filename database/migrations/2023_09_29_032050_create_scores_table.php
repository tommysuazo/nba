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
            $table->enum("type", ["away", "home"]);
            $table->unsignedTinyInteger("pts");
            $table->unsignedTinyInteger("ast");
            $table->unsignedTinyInteger("reb");

            $table->foreign("game_id")->references('id')->on('games')
                ->onDelete("cascade")->onUpdate("cascade");

            $table->foreign("team_id")->references('id')->on('teams')
                ->onDelete("set null")->onUpdate("cascade");

            $table->foreign("rival_id")->references('id')->on('scores')
                ->onDelete("set null")->onUpdate("cascade");

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
