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
// use Illuminate\http\Request;

Route::get('/', function () {
    return view('welcome');
});


 Route::get('/insert', function () {
     return view('Pages.insert');
 });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clothes', 'clothController@clothes');

Route::get('/women', 'clothController@women');

Route::get('/kids', 'clothController@kids');

Route::post('/insert', 'Controller@insert');

Route::get('/men', 'clothController@men');

Route::post('/update/{id}', 'clothController@update')->name('update');

Route::get('/edit/{id}', 'clothController@edit')->name('edit');	

Route::get('/destroy/{id}', 'clothController@destroy')->name('destroy');
