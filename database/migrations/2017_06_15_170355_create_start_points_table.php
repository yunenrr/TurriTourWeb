<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('start_points', function (Blueprint $table) {
            $table->increments('tableid')->unique();
            $table->float('latitude',8,6);
            $table->float('longitude',8,6);
            $table->unique(array('latitude','longitude'));
            $table->string('name',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('start_points');
    }
}
