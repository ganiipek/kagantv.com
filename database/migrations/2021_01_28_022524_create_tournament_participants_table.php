<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_participants', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->nullable();
            $table->foreignId("team_id")->nullable();
            $table->foreignId("tournament_id")->constrained();
            $table->integer('approval')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournament_participants');
    }
}
