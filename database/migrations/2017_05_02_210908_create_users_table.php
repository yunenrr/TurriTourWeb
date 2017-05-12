<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) 
        {
            $table->string('email',20)->unique()->primary();
            $table->string('password',15);
            $table->string('name',20);
            $table->string('firstlastname',20);
            $table->string('secondlastname',20);
            $table->integer('idroles')->unsigned();
            $table->foreign('idroles')->references('idroles')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
