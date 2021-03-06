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
    return view('auth.login');
}); 

Auth::routes();

Route::get('/getCompanys', 'CompanyController@getCompanys');

Route::post('/add-project', 'ProjectController@store')->name('add-project');

Route::get('/proyectos-en-ejecucion', 'ProjectController@index')->name('projects');
Route::get('/crear-proyecto', 'ProjectController@create')->name('crear-proyecto');

Route::get('/detalle-del-proyecto/{id}', 'ProjectController@show')->name('projects-detail');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@create')->name('proyect.create');

Route::get('/unproyecto', 'HomeController@unproyecto')->name('proyect.unproyecto');
 
Route::get('/logout', 'HomeController@index')->name('logout');

//
Route::resource('user', 'UserController');