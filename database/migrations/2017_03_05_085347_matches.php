<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Matches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_id')->references('id')->on('category');
            $table->string('teams');
            $table->string('venue');
            $table->date('match_date');
            $table->time('match_time');
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
        //
        Schema::dropIfExists('matches');
    }
}
