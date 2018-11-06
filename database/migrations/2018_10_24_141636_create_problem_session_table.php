<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem_session', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('steps')->default(1);
            $table->string('description');
            $table->string('clearstatement')->default('cleared');
            $table->string('parentproblem_id')->default(0);
            $table->boolean('cleared')->default(false);
            $table->integer('describable_id')->nullable();
            $table->string('describable_type')->nullable();
            $table->integer('diagnosis_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problem_session');
    }
}
