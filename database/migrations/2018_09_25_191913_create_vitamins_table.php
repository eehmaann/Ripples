<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitaminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitamins', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('vitamin');
            $table->integer('columnNumber');
            $table->integer('rowNumber');
            $table->integer('frequency')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vitamins');
    }
}
