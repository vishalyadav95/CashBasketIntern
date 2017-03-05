<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Answers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('answers_submited', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->references('id')->on('users');
            $table->string('question_id')->references('id')->on('questions');
            $table->string('answers');
            $table->boolean('eval')->default(0);
            $table->timestamps();
        });

        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_id')->references('id')->on('questions');
            $table->string('correct_answer');
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
        Schema::dropIfExists('answers_submited');
        Schema::dropIfExists('answers');
    }
}
