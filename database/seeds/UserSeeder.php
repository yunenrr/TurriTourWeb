<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert
        (
        	array
        	(
        		'email' => 'kefcampos@gmail.com',
        		'password' => '12345',
        		'name' => 'pepe',
        		'firstlastname' => 'perez',
        		'secondlastname' => 'perez',
        		'profilphoto' => 'http://turritour.000webhostapp.com/img/gallery/foto.jpg',
        		'idroles' => 1
        	)
        );

        DB::table('users')->insert
        (
        	array
        	(
        		'email' => 'pedro@gamil.com',
        		'password' => '123456',
        		'name' => 'pedro',
        		'firstlastname' => 'perez',
        		'secondlastname' => 'leon',
        		'profilphoto' => 'http://turritour.000webhostapp.com/img/gallery/foto.jpg',
        		'idroles' => 1
        	)
        );

        DB::table('users')->insert
        (
        	array
        	(
        		'email' => 'sofisofi@outlook.com',
        		'password' => '12345',
        		'name' => 'Sophia',
        		'firstlastname' => 'Fuentes',
        		'secondlastname' => 'Altamirán',
        		'profilphoto' => 'http://turritour.000webhostapp.com/img/gallery/foto.jpg',
        		'idroles' => 1
        	)
        );
    }//Fin del método
}//Fin de la clase