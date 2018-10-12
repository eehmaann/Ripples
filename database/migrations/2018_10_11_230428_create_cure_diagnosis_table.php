<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCureDiagnosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cure_diagnosis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('cure_id')->unsigned();
            $table->integer('diagnosis_id')->unsigned();

            $table->foreign('cure_id')->references('id')->on('cures');
            $table->foreign('diagnosis_id')->references('id')->on('diagnoses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cure_diagnosis');
    }
}
