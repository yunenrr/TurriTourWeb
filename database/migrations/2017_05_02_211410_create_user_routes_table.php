<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userroutes', function (Blueprint $table) 
        {
            $table->string('email',20)->unique();
            $table->integer('idroutes')->unsigned()->unique();
            $table->foreign('email')->references('email')->on('users');
            $table->foreign('idroutes')->references('idroutes')->on('routes');
            $table->primary(array('email','idroutes'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_routes');
    }
}
