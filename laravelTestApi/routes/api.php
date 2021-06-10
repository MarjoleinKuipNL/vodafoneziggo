<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 Route::get('people', 'App\Http\Controllers\PeopleController@index');
 Route::get('people/{id}', 'App\Http\Controllers\PeopleController@show');
 Route::post('people', 'App\Http\Controllers\PeopleController@store');
 Route::put('people/{id}', 'App\Http\Controllers\PeopleController@update');
 Route::delete('people/{id}', 'App\Http\Controllers\PeopleController@destroy');

 Route::get('species', 'App\Http\Controllers\SpeciesController@index');
 Route::get('specy/{id}', 'App\Http\Controllers\SpeciesController@show');
 Route::post('specy', 'App\Http\Controllers\SpeciesController@store');
 Route::put('specy/{id}', 'App\Http\Controllers\SpeciesController@update');
 Route::delete('specy/{id}', 'App\Http\Controllers\SpeciesController@destroy');

 Route::get('planets', 'App\Http\Controllers\PlanetsController@index');
 Route::get('planet/{id}', 'App\Http\Controllers\PlanetsController@show');
 Route::post('planet', 'App\Http\Controllers\PlanetsController@store');
 Route::put('planet/{id}', 'App\Http\Controllers\PlanetsController@update');
 Route::delete('planet/{id}', 'App\Http\Controllers\PlanetsController@destroy');
