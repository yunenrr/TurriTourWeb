<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routenodes', function (Blueprint $table) 
        {
            $table->integer('idroutes')->unsigned();
            $table->foreign('idroutes')->references('idroutes')->on('routes');
            $table->integer('idnodes')->unsigned();
            $table->foreign('idnodes')->references('idnodes')->on('nodes');
            $table->primary(array('idroutes','idnodes'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_nodes');
    }
}
