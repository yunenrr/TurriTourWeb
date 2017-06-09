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

Route::get('/logout', function () {
    return view('home-without-sophi');
});

Route::get('/credentials', function () {
    return view('credentials');
});

Route::get('/session', function () {
    return view('session');
});
Route::get('/support', function () {
    return view('support');
});

Route::get('/search-routes', function () {
    return view('parameters');
});

Route::post('search-routes','SearchParametersController@searchRoutes');


Route::get('/game', function () 
{
    return view('game');
});

Route::get('/map-route', function () 
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
Route::get('api/getuserbyemail', 'UserController@apiGetUserByEmail');
Route::get('api/getstartpoints', 'StartPointsController@apiGetAllStartPoints');
Route::get('api/getnodes', 'NodeController@getNodes');


//rutas para el area de administracion
Route::get('/administrator', function () {
    return view('/administrator/indexView');
});
Route::get('/place', function () {
    return view('administrator/place');
});
Route::get('/user', function () {
    return view('administrator/user');
});
Route::get('/typeActivities', function () {
    return view('administrator/tipyActivities');
});
Route::get('/categoryPlaces', function () {
    return view('administrator/categoryPlaces');
});