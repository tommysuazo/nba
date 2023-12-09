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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("external_id")->unique();
            $table->string("name", 100);
            $table->unsignedBigInteger("team_id")->nullable();
            $table->unsignedTinyInteger("pts")->default(0);
            $table->unsignedTinyInteger("ast")->default(0);
            $table->unsignedTinyInteger("reb")->default(0);

            $table->foreign('team_id')->references('id')->on('teams')
                ->onDelete("cascade")->onUpdate("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
