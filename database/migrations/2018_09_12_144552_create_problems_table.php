<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('steps')->nullable();
            $table->string('description');
            $table->string('clearstatement')->nullable();
            $table->string('parentproblem_id')->nullable();
            //parentproblem_id is a holder until it is properly associated
            $table->boolean('cleared')->default(false);
            $table->integer('describable_id')->nullable();
            $table->string('describable_type')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
    }
}
