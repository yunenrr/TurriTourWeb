<?php

use Illuminate\Database\Seeder;
use App\TypeActivities;
use Faker\Factory as Faker;

class SearchParametersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	$arrayActivities = [];
        $typeActivities = TypeActivities::all()->pluck('idtypeactivities');

        //Recorremos el JSON de tipos de actividades
        foreach($typeActivities as $current)
        {
        	array_push($arrayActivities, $current);
        }//Fin del for

        for($i = 0; $i < 300; $i++)
        {
	        DB::table('searchparameters')->insert
	        (
	        	array
	        	(
	        		'type_activity' => $faker->randomElement($arrayActivities),
	        		'max_distance' => $faker->randomElement([5,10,15,20]),
	        		'max_duration' => $faker->randomElement([10,15,25]),
	        		'average_cost' => $faker->randomElement([1,2,3,4]),
	        		'class' => $faker->randomElement(['c1','c2','c3']),
	        		'user_email' => 'sofisofi@outlook.com'
	        	)
	        );
        }//Fin del for
    }//Fin del método
}//Fin de la clase