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

// Authentication routes
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');

Route::get('/profile', 'UsersController@profile');
Route::post('/profile', 'UsersController@profile');

Route::get('/', function () {
    return redirect('/recipes');
});

Route::get('/home', function () {
    return redirect('/recipes');
});

Route::get('/sastojci', 'RecipesController@viewSastojci');

Route::get('/recipes', 'RecipesController@index'); // prilaz svih recepata (popis)

Route::get('/recipes/add', 'RecipesController@add'); // prikaz view-a sa web obrascem za unos
Route::post('/recipes/add', 'RecipesController@save'); // spremanje podataka u bazu

Route::get('/recipes/view/{id}', 'RecipesController@view'); // detaljan prikaz određenog recepta

Route::get('/recipes/edit/{id}', 'RecipesController@edit'); // prikaz webobrasca za uređivanje
Route::post('/recipes/edit', 'RecipesController@update'); // ažuriranje podataka u bazi

Route::get('recipes/del/{id}', 'RecipesController@delete'); // brisanje recepta























