<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentSolutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_solution', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('appointment_id')->unsigned();
            $table->integer('solution_id')->unsigned();

            $table->foreign('appointment_id')->references('id')->on('appointments');
            $table->foreign('solution_id')->references('id')->on('solutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_solution');
    }
}


