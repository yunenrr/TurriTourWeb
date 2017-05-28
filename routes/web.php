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

Route::get('/Recomendar Rutas', function () 
{
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

Route::get('api/allactivity', 'TypeActivityController@apiGetAllActivities');
Route::get('api/allcategory', 'CategoryController@apiGetAllCategory');
Route::get('api/getnode', 'NodeController@apiGetForMap');
Route::get('api/allroute', 'RouteController@apiGetAllRoute');
Route::get('api/getnodebyroute', 'RouteNodeController@apiGetNodeByRoute');


//rutas para el area de administracion
Route::get('/Administrador', function () {
    return view('/administrador/indexView');
});
Route::get('/Ingreso', function () {
    return view('administrador/login');
});
Route::get('/Lugares', function () {
    return view('administrador/lugar');
});
Route::get('/Registro', function () {
    return view('administrador/register');
});
Route::get('/Rutas', function () {
    return view('administrador/rutas');
});
Route::get('/Usuarios', function () {
    return view('administrador/usuario');
});
Route::get('/TipoActividades', function () {
    return view('administrador/tipoActividad');
});
Route::get('/CategoriaLugar', function () {
    return view('administrador/categoriaLugar');
});