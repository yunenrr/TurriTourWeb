<?php

use Illuminate\Database\Seeder;
use App\TypeActivities;
use App\Node;
use App\Category;
use Faker\Factory as Faker;

class NodeSeeder extends Seeder
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
    	$arrayCategory = [];
    	$arrayNode = [];
        $typeActivities = TypeActivities::all()->pluck('idtypeactivities');
        $category = Category::all()->pluck('idcategories');

        //Recorremos el JSON de tipos de actividades
        foreach($typeActivities as $current)
        {
        	array_push($arrayActivities, $current);
        }//Fin del for

        //Recorremos el JSON de categorías
        foreach($category as $current)
        {
        	array_push($arrayCategory, $current);
        }//Fin del for

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.899827,
        		'longitude' => -83.675345,
        		'idcategories' => 1,
        		'idtypeactivities' => 3,
        		'value' => 'Bajo',
        		'name' => 'El Ajonjolí',
        		'information' => 'Cuenta con las mejores hamburguesas de Turrialba artesanales cuidan cada detalle para tener la combinación perfecta, ingredientes frescos',
        		'slogan' => '“Las Mejores Hamburguesas de Turrialba”',
        		'pathlogo' => 'https://cocinaycallaoficial.files.wordpress.com/2016/05/logo-cocina-calla1.png',
        		'pathvideoimage' => 'http://turritour.000webhostapp.com/img/nodes/2.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.900821,
        		'longitude' => -83.674194,
        		'idcategories' => 1,
        		'idtypeactivities' => 3,
        		'value' => 'Bajo',
        		'name' => 'Soda la U',
        		'information' => 'Excelente comida',
        		'slogan' => 'Buen provecho',
        		'pathlogo' => 'https://cocinaycallaoficial.files.wordpress.com/2016/05/logo-cocina-calla1.png',
        		'pathvideoimage' => 'http://turritour.000webhostapp.com/img/nodes/2.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.904337,
        		'longitude' => -83.683541,
        		'idcategories' => 1,
        		'idtypeactivities' => 3,
        		'value' => 'Medio',
        		'name' => 'Mundo de sabores',
        		'information' => 'Excelente atención, buen menú y buenos precios',
        		'slogan' => 'Gastronomia de alto nivel',
        		'pathlogo' => 'https://cocinaycallaoficial.files.wordpress.com/2016/05/logo-cocina-calla1.png',
        		'pathvideoimage' => 'http://turritour.000webhostapp.com/img/nodes/2.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.904585,
        		'longitude' => -83.686054,
        		'idcategories' => 1,
        		'idtypeactivities' => 3,
        		'name' => 'La feria',
        		'value' => 'Medio',
        		'information' => 'Muy buena comida, un lugar de encuentro de artistas locales, centro de reuniones donde muchas veces el tema es el arte en todas sus caras,  excelente comida, lugar cuenta con personal muy amable y que atienden muy bien.',
        		'slogan' => 'El arte hecho comida',
        		'pathlogo' => 'https://cocinaycallaoficial.files.wordpress.com/2016/05/logo-cocina-calla1.png',
        		'pathvideoimage' => 'http://turritour.000webhostapp.com/img/nodes/2.jpg',
        		'urlfacebook' => 'https://www.facebook.com/RestauranteLaFeria/?rf=394134977276134',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.905709,
        		'longitude' => -83.683059,
        		'idcategories' => 1,
        		'idtypeactivities' => 3,
        		'name' => 'Gran Napolitana',
        		'value' => 'Bajo',
        		'information' => 'para todos los clientes y amigos estamos ya en Santa Cruz de Turrialba 50 metros este del bar el arca de Noé, ',
        		'slogan' => 'La mejor pizza de Turrialba',
        		'pathlogo' => 'https://cocinaycallaoficial.files.wordpress.com/2016/05/logo-cocina-calla1.png',
        		'pathvideoimage' => 'http://turritour.000webhostapp.com/img/nodes/2.jpg',
        		'urlfacebook' => 'https://www.facebook.com/Pizzeria-La-Gran-Napoli-449229035150979/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.909740,
        		'longitude' => -83.688902,
        		'idcategories' => 1,
        		'idtypeactivities' => 3,
        		'name' => 'Nasca',
        		'value' => 'Alto',
        		'information' => 'Nuestro compromiso con el cliente y la apuesta por la calidad, hacen que nuestra actividad se base en dos pilares: un trato familiar, que le haga sentirse como en casa y una carta diferenciadora, con platillos que le permitan saborear los alimentos de siempre con un toque muy especial.',
        		'slogan' => 'Deliciosa comida',
        		'pathlogo' => 'https://cocinaycallaoficial.files.wordpress.com/2016/05/logo-cocina-calla1.png',
        		'pathvideoimage' => 'http://turritour.000webhostapp.com/img/nodes/2.jpg',
        		'urlfacebook' => 'https://www.facebook.com/NazcaTurrialba/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.972451,
        		'longitude' => -83.690471,
        		'idcategories' => 4,
        		'idtypeactivities' => 4,
        		'name' => 'Parque Guayabo',
        		'value' => 'Bajo',
        		'information' => 'El Monumento Nacional Guayabo es un área protegida de Costa Rica, conocida principalmente porque en ella se encuentra uno de los sitios arqueológicos prehispánicos más antiguos e importantes del país.',
        		'slogan' => 'Conservando la naturaleza',
        		'pathlogo' => 'http://www.extremadurapiscinas.com/web/extremadurapiscinas/images/logo_piscina-azul.png',
        		'pathvideoimage' => 'http://www.piscinasalma.com/web/piscinasalma/images/prefabricada_caceres.jpg',
        		'urlfacebook' => 'https://www.facebook.com/GuayaboCR/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 10.019722,
        		'longitude' => -83.763333,
        		'idcategories' => 4,
        		'idtypeactivities' => 1,
        		'name' => 'Volcan Turrialba',
        		'value' => 'Bajo',
        		'information' => 'El volcán Turrialba es un estratovolcán complejo activo de Costa Rica, ubicado en el distrito de Santa Cruz, en el cantón de Turrialba, provincia de Cartago, a 24 km de la ciudad del mismo nombre.',
        		'slogan' => 'Una vista increible',
        		'pathlogo' => 'http://www.extremadurapiscinas.com/web/extremadurapiscinas/images/logo_piscina-azul.png',
        		'pathvideoimage' => 'http://www.piscinasalma.com/web/piscinasalma/images/prefabricada_caceres.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.945893,
        		'longitude' => -83.690194,
        		'idcategories' => 1,
        		'idtypeactivities' => 4,
        		'name' => 'Wagelia Espino Blanco Lodge',
        		'value' => 'Bajo',
        		'information' => 'Ubicado en la Reserva Biológica que lleva su nombre, en representación del árbol “Espino Blanco” que se encuentra en vías de extinción.',
        		'slogan' => 'Lugar acto para descansar',
        		'pathlogo' => 'https://cocinaycallaoficial.files.wordpress.com/2016/05/logo-cocina-calla1.png',
        		'pathvideoimage' => 'http://turritour.000webhostapp.com/img/nodes/2.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.899365,
        		'longitude' => -83.675274,
        		'idcategories' => 5,
        		'idtypeactivities' => 4,
        		'name' => 'Hospedaje Yaldai',
        		'value' => 'Medio',
        		'information' => 'Ciudadela, edificio, Pista Olímpica Estadio Rafael Angel Camacho 4, Provincia de Cartago, Turrialba, 30501, Costa Rica',
        		'slogan' => 'Tan comodo como un hogar',
        		'pathlogo' => 'https://image.freepik.com/vector-gratis/logo-marcador-de-hotel_1043-112.jpg',
        		'pathvideoimage' => 'http://bitacorasdeviaje.com/wp-content/uploads/2014/02/buscador_de_hoteles_1.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.904584,
        		'longitude' => -83.686054,
        		'idcategories' => 1,
        		'idtypeactivities' => 3,
        		'name' => 'La feria',
        		'value' => 'Bajo',
        		'information' => 'Muy buena comida, un lugar de encuentro de artistas locales, centro de reuniones donde muchas veces el tema es el arte en todas sus caras,  excelente comida, lugar cuenta con personal muy amable y que atienden muy bien.',
        		'slogan' => 'El arte hecho comida',
        		'pathlogo' => 'https://cocinaycallaoficial.files.wordpress.com/2016/05/logo-cocina-calla1.png',
        		'pathvideoimage' => 'http://turritour.000webhostapp.com/img/nodes/2.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.904185,
        		'longitude' => -83.682252,
        		'idcategories' => 5,
        		'idtypeactivities' => 4,
        		'name' => 'Inter Americano',
        		'value' => 'Bajo',
        		'information' => 'El Hotel Interamericano está situado en Turrialba, provincia de Cartago, a 44',
        		'slogan' => 'El mejor lugar para hospedarse',
        		'pathlogo' => 'https://image.freepik.com/vector-gratis/logo-marcador-de-hotel_1043-112.jpg',
        		'pathvideoimage' => 'http://bitacorasdeviaje.com/wp-content/uploads/2014/02/buscador_de_hoteles_1.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.904790,
        		'longitude' => -83.685725,
        		'idcategories' => 5,
        		'idtypeactivities' => 4,
        		'name' => 'Wagelia',
        		'value' => 'Bajo',
        		'information' => 'Tenemos las mejores abitaciones con la mejor ubicacion en Turrialba',
        		'slogan' => 'Paraiso verde',
        		'pathlogo' => 'https://image.freepik.com/vector-gratis/logo-marcador-de-hotel_1043-112.jpg',
        		'pathvideoimage' => 'http://bitacorasdeviaje.com/wp-content/uploads/2014/02/buscador_de_hoteles_1.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.903322,
        		'longitude' => -83.684318,
        		'idcategories' => 5,
        		'idtypeactivities' => 4,
        		'name' => 'Hostel Casa de Lis',
        		'value' => 'Medio',
        		'information' => 'Un lugar bastante tranquilo, con un ambiente relajado y aseado. Los baños y la habitación estaban impecables. Me gustó y si volvería ya que además está super cerca de la terminal del bus.',
        		'slogan' => 'Lindo lugar, limpio y barato',
        		'pathlogo' => 'https://image.freepik.com/vector-gratis/logo-marcador-de-hotel_1043-112.jpg',
        		'pathvideoimage' => 'http://bitacorasdeviaje.com/wp-content/uploads/2014/02/buscador_de_hoteles_1.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.862300,
        		'longitude' => -83.645398,
        		'idcategories' => 5,
        		'idtypeactivities' => 4,
        		'name' => 'Casa Turire',
        		'value' => 'Bajo',
        		'information' => 'Casa Turire hace recordar una hermosa casa ubicada en una plantación en la época colonial.',
        		'slogan' => 'Hermoso lugar, excelente para descansar y pasarla con la familia.',
        		'pathlogo' => 'https://image.freepik.com/vector-gratis/logo-marcador-de-hotel_1043-112.jpg',
        		'pathvideoimage' => 'http://bitacorasdeviaje.com/wp-content/uploads/2014/02/buscador_de_hoteles_1.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.897410,
        		'longitude' => -83.697618,
        		'idcategories' => 5,
        		'idtypeactivities' => 4,
        		'name' => 'Hotel Green Mountain and Lodge',
        		'value' => 'Alto',
        		'information' => 'El Green Mountain and Lodge se encuentra a solo 2,5 km de la ciudad de Turrialba, en la región de Cartago, a 300 metros al norte de la residencia de ancianos de la carretera San Juan Norte.',
        		'slogan' => 'La mejor vista',
        		'pathlogo' => 'https://image.freepik.com/vector-gratis/logo-marcador-de-hotel_1043-112.jpg',
        		'pathvideoimage' => 'http://bitacorasdeviaje.com/wp-content/uploads/2014/02/buscador_de_hoteles_1.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 10.021596,
        		'longitude' => -83.737345,
        		'idcategories' => 5,
        		'idtypeactivities' => 4,
        		'name' => 'Hotel Guayabo Lodge',
        		'value' => 'Medio',
        		'information' => 'Hotel_Guayabo_Lodge-Turrialba_Province_of_Cartago',
        		'slogan' => 'Un lugar de paz',
        		'pathlogo' => 'https://image.freepik.com/vector-gratis/logo-marcador-de-hotel_1043-112.jpg',
        		'pathvideoimage' => 'http://bitacorasdeviaje.com/wp-content/uploads/2014/02/buscador_de_hoteles_1.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        DB::table('nodes')->insert
        (
        	array
        	(
        		'latitude' => 9.913993,
        		'longitude' => -83.691685,
        		'idcategories' => 1,
        		'idtypeactivities' => 3,
        		'name' => 'Betico Mata',
        		'value' => 'Alto',
        		'information' => 'Este es el tipo de lugar que te cocinan en el instante, que comes sencillo y rico, sin pretensiones pero con un buen sabor',
        		'slogan' => 'Excelente comida',
        		'pathlogo' => 'https://cocinaycallaoficial.files.wordpress.com/2016/05/logo-cocina-calla1.png',
        		'pathvideoimage' => 'http://turritour.000webhostapp.com/img/nodes/2.jpg',
        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
        		'urlweb' => 'https://yarr-blog.blogspot.com/'
        	)
        );

        $nodes = Node::all();
        $sizeNode = count($nodes)-1;
        $temp;

        //Creamos el resto de registros copias
        for($i = 1;$i < 183;$i++)
        {
        	$temp = rand(0,$sizeNode);

	        DB::table('nodes')->insert
	        (
	        	array
	        	(
	        		'latitude' => ($nodes[$temp]->latitude+($i/1000)),
	        		'longitude' => ($nodes[$temp]->longitude-($i/1000)),
	        		'idcategories' => $faker->randomElement($arrayCategory),
	        		'idtypeactivities' => $faker->randomElement($arrayActivities),
	        		'name' => $nodes[$temp]->name,
	        		'value' => $faker->randomElement(['Bajo','Medio','Alto']),
	        		'information' => $nodes[$temp]->information,
	        		'slogan' => $nodes[$temp]->slogan,
	        		'pathlogo' => $nodes[$temp]->pathlogo,
	        		'pathvideoimage' => $nodes[$temp]->pathvideoimage,
	        		'urlfacebook' => 'https://www.facebook.com/yarrblog/',
	        		'urlweb' => 'https://yarr-blog.blogspot.com/'
	        	)
	        );
        }//Fin del for
    }//Fin del método
}//Fin de la clase