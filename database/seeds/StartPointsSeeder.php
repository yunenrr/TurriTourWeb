<?php

use Illuminate\Database\Seeder;

class StartPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('start_points')->insert
        (
        	array
        	(
        		'latitude' => 0,
        		'longitude' => 0,
        		'name' => 'Tú ubicación'
        	)
        );

        DB::table('start_points')->insert
        (
        	array
        	(
        		'latitude' => 9.901855,
        		'longitude' => -83.670746,
        		'name' => 'UCR Turrialba'
        	)
        );

        DB::table('start_points')->insert
        (
        	array
        	(
        		'latitude' => 9.905167,
        		'longitude' => -83.622901,
        		'name' => 'Jabillos'
        	)
        );

        DB::table('start_points')->insert
        (
        	array
        	(
        		'latitude' => 9.963992,
        		'longitude' => -83.70941,
        		'name' => 'San Antonio'
        	)
        );
    }//Fin del método
}//Fin de la clase