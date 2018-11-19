<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectDiagnosesAndProblems extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::table('problems', function (Blueprint $table) {
            $table->integer('diagnosis_id')->unsigned();
            $table->foreign('diagnosis_id')->references('id')->on('diagnoses');
        });
    }

    public function down(){
        Schema::table('problems', function (Blueprint $table) {
            $table->dropForeign('problems_diagnosis_id_foreign');
            $table->dropColumn('diagnosis_id');
        });
    }
}