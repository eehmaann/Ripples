<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmotionProblemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emotion_problem', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();


            $table->integer('emotion_id')->unsigned();
            $table->integer('problem_id')->unsigned();

            $table->foreign('emotion_id')->references('id')->on('emotions');
            $table->foreign('problem_id')->references('id')->on('problems');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emotion_problem');
    }
}
