<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) 
        {
            $table->increments('idnodes')->unique();
            $table->float('latitude',8,6);
            $table->float('longitude',8,6);
            $table->unique(array('latitude','longitude'));
            $table->integer('idcategories')->unsigned();
            $table->foreign('idcategories')->references('idcategories')->on('categories');
            $table->integer('idtypeactivities')->unsigned();
            $table->foreign('idtypeactivities')->references('idtypeactivities')->on('typeactivities');
            $table->string('value',10);
            $table->string('name',100);
            $table->string('information',1000);
            $table->string('slogan',100);
            $table->string('pathlogo',100);
            $table->string('pathvideoimage',200);
            $table->string('urlfacebook',200);
            $table->string('urlweb',600);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodes');
    }
}
