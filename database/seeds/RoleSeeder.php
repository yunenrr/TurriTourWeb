<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array('name' => 'Administrador'));
        DB::table('roles')->insert(array('name' => 'Cliente'));
    }//Fin del método
}//Fin de la clase