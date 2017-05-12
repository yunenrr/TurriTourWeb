<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) 
        {
            $table->increments('idroutes')->unique();
            $table->integer('idtypeactivities')->unsigned();
            $table->foreign('idtypeactivities')->references('idtypeactivities')->on('typeactivities');
            $table->integer('minutes');
            $table->integer('km');
            $table->integer('cost');
            $table->string('information',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
