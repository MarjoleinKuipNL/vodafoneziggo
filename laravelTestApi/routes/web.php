<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('peoples', 'App\Http\Controllers\PeopleController@index')->middleware('auth');
Route::get('people/{id}', 'App\Http\Controllers\PeopleController@show')->middleware('auth');
Route::post('people', 'App\Http\Controllers\PeopleController@store')->middleware('auth');
Route::put('people/{id}', 'App\Http\Controllers\PeopleController@update')->middleware('auth');
Route::delete('people/{id}', 'App\Http\Controllers\PeopleController@destroy')->middleware('auth');

Route::get('species', 'App\Http\Controllers\SpeciesController@index')->middleware('auth');
Route::get('species/{id}', 'App\Http\Controllers\SpeciesController@show')->middleware('auth');
Route::post('species', 'App\Http\Controllers\SpeciesController@store')->middleware('auth');
Route::put('species/{id}', 'App\Http\Controllers\SpeciesController@update')->middleware('auth');
Route::delete('species/{id}', 'App\Http\Controllers\SpeciesController@destroy')->middleware('auth');

Route::get('planets', 'App\Http\Controllers\PlanetsController@index')->middleware('auth');
Route::get('planet/{id}', 'App\Http\Controllers\PlanetsController@show')->middleware('auth');
Route::post('planet', 'App\Http\Controllers\PlanetsController@store')->middleware('auth');
Route::put('planet/{id}', 'App\Http\Controllers\PlanetsController@update')->middleware('auth');
Route::delete('planet/{id}', 'App\Http\Controllers\PlanetsController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
