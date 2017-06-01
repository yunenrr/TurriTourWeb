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

Route::get('/Buscar Rutas', function () {
    return view('parametros');
});

Route::get('/Recomendar Rutas', function () {
    return view('rutasrecomendadas');
});
Route::post('Buscar Rutas','ParametrosBusquedaController@buscarRutas');


Route::get('/game', function () 
{
    return view('game');
});

Route::get('/map-route/{idroute}', function () 
{
    return view('map-route');
});

Route::get('/place/{idplace}', function () 
{
    return view('place');
});

Route::get('api/allactivity', 'TypeActivityController@apiGetAllActivities');
Route::get('api/allcategory', 'CategoryController@apiGetAllCategory');
Route::get('api/getnode', 'NodeController@apiGetForMap');
Route::get('api/allroute', 'RouteController@apiGetAllRoute');
Route::get('api/getnodebyroute', 'RouteNodeController@apiGetNodeByRoute');


//rutas para el area de administracion
Route::get('/administrator', function () {
    return view('/administrator/indexView');
});
Route::get('/login', function () {
    return view('administrator/login');
});
Route::get('/place', function () {
    return view('administrator/place');
});
Route::get('/register', function () {
    return view('administrator/register');
});
Route::get('/route', function () {
    return view('administrator/route');
});
Route::get('/user', function () {
    return view('administrator/user');
});
Route::get('/tipyActivities', function () {
    return view('administrator/tipyActivities');
});
Route::get('/categoryPlaces', function () {
    return view('administrator/categoryPlaces');
});