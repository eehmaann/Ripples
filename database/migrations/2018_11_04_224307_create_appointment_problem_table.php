<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentProblemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_problem', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('appointment_id')->unsigned();
            $table->integer('problem_id')->unsigned();

            $table->foreign('appointment_id')->references('id')->on('appointments');
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
        Schema::dropIfExists('appointment_problem');
    }
}
