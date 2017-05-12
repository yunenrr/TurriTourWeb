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
            $table->float('latitudenodes')->unsigned();
            $table->foreign('latitudenodes')->references('latitude')->on('nodes');
            $table->float('longitudenodes')->unsigned();
            $table->foreign('longitudenodes')->references('longitude')->on('nodes');
            $table->primary(array('idroutes','latitudenodes','longitudenodes'));
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
