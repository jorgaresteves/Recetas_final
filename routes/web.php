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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/ingredientes', App\Http\Controllers\IngredientController::class);
Route::resource('/recetas', App\Http\Controllers\RecipeController::class);

Route::get('/cambiar-status/{id}', 'App\Http\Controllers\RecipeController@status')->name('recetas.status');