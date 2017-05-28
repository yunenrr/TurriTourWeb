<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/VictorElRico
Route::get('/Buscar Rutas', function () {
    return view('parametros');
});

Route::get('/Recomendar Rutas', function () {
    return view('rutasrecomendadas');
});

Route::post('Buscar Rutas','ParametrosBusquedaController@buscarRutas');


<<<<<<< HEAD
=======
=======
>>>>>>> origin/VictorElRico
//Ruta del juego
Route::get('/game', function () 
{
    return view('game');
});

<<<<<<< HEAD
>>>>>>> refs/remotes/origin/master
=======
>>>>>>> origin/VictorElRico
Route::get('api/allactivity', 'TypeActivityController@apiGetAllActivities');
Route::get('api/allcategory', 'CategoryController@apiGetAllCategory');
Route::get('api/getnode', 'NodeController@apiGetForMap');
Route::get('api/allroute', 'RouteController@apiGetAllRoute');
Route::get('api/getnodebyroute', 'RouteNodeController@apiGetNodeByRoute');