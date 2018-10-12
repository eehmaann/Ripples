<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration; 

class ConnectLocatorsAndLocators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diagnoses', function (Blueprint $table) {
            $table->integer('locator_id')->unsigned();
            $table->foreign('locator_id')->references('id')->on('locators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
   public function down(){
        Schema::table('diagnoses', function (Blueprint $table) {
            $table->dropForeign('diagnoses_locator_id_foreign');
            $table->dropColumn('locator_id');
        });
    }
}