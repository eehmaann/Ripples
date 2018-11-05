<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cords', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Cordedto');
            $table->longText('brain_to_brain_cord')->nullable();
            $table->longText('brain_to_heart_cord')->nullable();
            $table->longText('brain_to_gut_cord')->nullable();
            $table->longText('brain_to_privates_cord')->nullable();
            $table->longText('heart_to_brain_cord')->nullable();
            $table->longText('heart_to_heart_cord')->nullable();
            $table->longText('heart_to_gut_cord')->nullable();
            $table->longText('heart_to_privates_cord')->nullable();
            $table->longText('gut_to_brain_cord')->nullable();
            $table->longText('gut_to_heart_cord')->nullable();
            $table->longText('gut_to_gut_cord')->nullable();
            $table->longText('gut_to_privates_cord')->nullable();
            $table->longText('privates_to_brain_cord')->nullable();
            $table->longText('privates_to_heart_cord')->nullable();
            $table->longText('privates_to_gut_cord')->nullable();
            $table->longText('privates_to_privates_cord')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cords');
    }
}
