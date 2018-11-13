<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservationStatementPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observation_statement', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('observation_id')->unsigned();
            $table->integer('statement_id')->unsigned();
            $table->foreign('observation_id')->references('id')->on('observations')->onDelete('cascade');
            $table->foreign('statement_id')->references('id')->on('statements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('observation_statement');
    }
}
