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
Route::post('/','SearchParametersController@searchRoutes');


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

Route::get('/administrator', function () {
    return view('/administrator/indexView');
});

Route::get('api/allactivity', 'TypeActivityController@apiGetAllActivities');
Route::get('api/allcategory', 'CategoryController@apiGetAllCategory');
Route::get('api/getnode', 'NodeController@apiGetForMap');
Route::get('api/getuserbyemail','UserController@apiGetUserByEmail');
Route::get('api/getstartpoints','StartPointsController@apiGetAllStartPoints');
Route::get('api/getallusers', 'UserController@apiGetAllUsers');
Route::Post('api/userstore', 'UserController@store');
Route::Post('api/getsearchparametersbyemail', 'SearchParametersController@getSearchParametersByEmail');

Route::resource('activity', 'TypeActivityController');
Route::get('activities', 'TypeActivityController@showAll');
Route::get('dactivity', 'TypeActivityController@destroy');
Route::resource('user', 'UserController');
Route::resource('place', 'NodeController');
Route::resource('categoryPlace', 'CategoryController');