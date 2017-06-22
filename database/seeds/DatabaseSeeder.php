<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('TypeActivitiesSeeder');
        $this->call('CategorySeeder');
        $this->call('RoleSeeder');
        $this->call('StartPointsSeeder');
        $this->call('UserSeeder');
        $this->call('SearchParametersSeeder');
        $this->call('NodeSeeder');
    }//Fin del método
}//Fin de la clase