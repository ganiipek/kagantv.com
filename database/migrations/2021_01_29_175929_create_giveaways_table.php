<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiveawaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giveaways', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("winner_id")->nullable()->constrained("users");
            $table->text("name");
            $table->text("award");
            $table->boolean("is_follower")->default(0);
            $table->boolean("is_like_stream")->default(0);
            $table->text("stream_link")->nullable();
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
        Schema::dropIfExists('giveaways');
    }
}
