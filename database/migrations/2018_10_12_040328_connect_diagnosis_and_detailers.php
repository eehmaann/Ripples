<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Diagnosis; 
use App\Detailer; 

class ConnectDiagnosisAndDetailers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::table('detailers', function (Blueprint $table) {
            $table->integer('diagnosis_id')->unsigned();
            $table->foreign('diagnosis_id')->references('id')->on('diagnoses');  
        });   
    }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
    public function down(){
        Schema::table('detailers', function (Blueprint $table) {
            $table->dropForeign('detailers_diagnosis_id_foreign');

            $table->dropColumn('diagnosis_id');
        });

    }
}