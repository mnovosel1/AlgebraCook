<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes', 'RecipesController@index'); // prilaz svih recepata (popis)

Route::get('/recipes/add', 'RecipesController@add'); // prikaz view-a sa web obrascem za unos
Route::post('/recipes/add', 'RecipesController@save'); // spremanje podataka u bazu

Route::get('/recipes/view/{id}', 'RecipesController@view'); // detaljan prikaz određenog recepta

Route::get('/recipes/edit/{id}', 'RecipesController@edit'); // prikaz webobrasca za uređivanje
Route::post('/recipes/edit', 'RecipesController@update'); // ažuriranje podataka u bazi

Route::delete('recipes/del/{id}', 'RecipesController@delete'); // brisanje recepta
