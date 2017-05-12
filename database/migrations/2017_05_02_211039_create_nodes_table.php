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
            $table->float('latitude')->unique();
            $table->float('longitude')->unique();
            $table->primary(array('latitude','longitude'));
            $table->integer('idcategories')->unsigned();
            $table->foreign('idcategories')->references('idcategories')->on('categories');
            $table->string('name',20);
            $table->string('information',1000);
            $table->string('slogan',50);
            $table->string('pathlogo',100);
            $table->string('pathvideoimage',100);
            $table->string('urlfacebook',100);
            $table->string('urlweb',100);
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
