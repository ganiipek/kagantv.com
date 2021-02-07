<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->text("name");
            $table->text("type");
            $table->text("award")->nullable();
            $table->integer("active")->default(1);
            $table->integer("player_count")->nullable();
            $table->integer("team_count")->nullable();
            $table->integer("team_player_count")->nullable();
            $table->integer("winner_id")->nullable();
            $table->text("rules")->nullable();
            $table->text("photo_path")->nullable();
            $table->timestamp("starting_date");
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
        Schema::dropIfExists('tournaments');
    }
}
