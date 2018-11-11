<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChildStatement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_statement', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('child_id');
            $table->integer('statement_id');
            $table->integer('observation_id')->nullable();
            $table->date('date_achieved')->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('next_step')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
