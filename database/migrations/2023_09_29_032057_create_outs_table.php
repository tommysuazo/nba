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
        Schema::create('outs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("score_id");
            $table->unsignedBigInteger("player_id");

            $table->foreign("score_id")->references('id')->on('scores')
                ->onDelete("cascade")->onUpdate("cascade");

            $table->foreign("player_id")->references('id')->on('players')
                ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outs');
    }
};
