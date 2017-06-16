<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array('name' => 'Restaurantes','pathimage' => 'http://dominio.fm/wp-content/uploads/2015/08/restaurant-hotel-barcelo-santo-domingo-237-10481.jpg'));
        DB::table('categories')->insert(array('name' => 'Centro Turístico','pathimage' => 'https://media-cdn.tripadvisor.com/media/photo-s/01/cf/35/ee/sapito.jpg'));
        DB::table('categories')->insert(array('name' => 'Parque Nacional','pathimage' => 'https://grandvoyagerblog.files.wordpress.com/2015/12/monumento-nacional-guayabo.jpg'));
        DB::table('categories')->insert(array('name' => 'Piscinas','pathimage' => 'http://consota.comfamiliar.com/component/joomgallery/image.raw?view=image&type=orig&id=179'));
        DB::table('categories')->insert(array('name' => 'Hoteles','pathimage' => 'http://placehold.it/300x250'));
    }//Fin del método
}//Fin de la clase