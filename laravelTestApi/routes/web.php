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

Route::resource('people', App\Http\Controllers\Web\PeoplesController::class);
Route::resource('species', App\Http\Controllers\Web\SpeciesController::class);
Route::resource('planets', App\Http\Controllers\Web\PlanetsController::class);
// Route::get('peoples', 'App\Http\Controllers\Web\PeoplesController@index')->middleware('auth')->name('peoples');
// Route::get('people/{id}', 'App\Http\Controllers\Web\PeoplesController@show')->middleware('auth')->name('people.show');
// Route::get('people/create', 'App\Http\Controllers\Web\PeoplesController@create')->middleware('auth')->name('people.create');
// Route::post('people', 'App\Http\Controllers\Web\PeoplesController@store')->middleware('auth')->name('people');
// Route::post('people/edit', 'App\Http\Controllers\Web\PeoplesController@edit')->middleware('auth')->name('people.edit');

// Route::put('people/{id}', 'App\Http\Controllers\Web\PeoplesController@update')->middleware('auth');
// Route::delete('people/{id}', 'App\Http\Controllers\Web\PeoplesController@destroy')->middleware('auth')->name('people.destroy');

// Route::get('species', 'App\Http\Controllers\Web\SpeciesController@index')->middleware('auth')->name('species');
// Route::get('species/{id}', 'App\Http\Controllers\Web\SpeciesController@show')->middleware('auth')->name('species.show');
// Route::get('species/create', 'App\Http\Controllers\Web\SpeciesController@create')->middleware('auth')->name('species.create');
// Route::post('species', 'App\Http\Controllers\Web\SpeciesController@store')->middleware('auth')->name('species.store');
// Route::put('species/{id}', 'App\Http\Controllers\Web\SpeciesController@update')->middleware('auth')->name('species.update');
// Route::put('species/{id}', 'App\Http\Controllers\Web\SpeciesController@update')->middleware('auth')->name('species.update');
// Route::delete('species/{id}', 'App\Http\Controllers\Web\SpeciesController@destroy')->middleware('auth');

// Route::get('planets', 'App\Http\Controllers\Web\PlanetsController@index')->middleware('auth');
// Route::get('planet/{id}', 'App\Http\Controllers\Web\PlanetsController@show')->middleware('auth');
// Route::post('planet', 'App\Http\Controllers\Web\PlanetsController@store')->middleware('auth');
// Route::put('planet/{id}', 'App\Http\Controllers\Web\PlanetsController@update')->middleware('auth');
// Route::delete('planet/{id}', 'App\Http\Controllers\Web\PlanetsController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
