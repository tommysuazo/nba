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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("awayteam_id")->unique();
            $table->unsignedBigInteger("hometeam_id")->unique();
            $table->timestamps();

            $table->foreign("awayteam_id")->references("id")->on("teams")->onUpdate("cascade")->onDelete("cascade");
            $table->foreign("hometeam_id")->references("id")->on("teams")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
