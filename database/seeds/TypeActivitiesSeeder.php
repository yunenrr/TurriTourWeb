<?php

use Illuminate\Database\Seeder;

class TypeActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('typeactivities')->insert(array('name' => 'Senderismo'));
		DB::table('typeactivities')->insert(array('name' => 'Aventura'));
		DB::table('typeactivities')->insert(array('name' => 'Gastronomía'));
		DB::table('typeactivities')->insert(array('name' => 'Cultura'));
    }//Fin del método
}//Fin de la clase