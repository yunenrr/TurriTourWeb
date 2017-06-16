<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searchparameters', function (Blueprint $table) 
        {
            $table->increments('tableid')->unique();
            $table->integer('type_activity')->unsigned();
            $table->foreign('type_activity')->references('idtypeactivities')->on('typeactivities');
            $table->integer('max_distance');
            $table->integer('max_duration');
            $table->integer('average_cost');
            $table->string('class',2);
            $table->string('user_email',50);
            $table->foreign('user_email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_parameters');
    }
}
