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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('index');
});

Route::get('/artikel', 'ArticlesController@index');
Route::get('/artikel/create', 'ArticlesController@create');
Route::post('/artikel', 'ArticlesController@store');
Route::get('/artikel/{article}', 'ArticlesController@show');
Route::delete('/artikel/{article}', 'ArticlesController@destroy');
Route::get('/artikel/{article}/edit', 'ArticlesController@edit');
Route::patch('/artikel/{article}', 'ArticlesController@update');
Route::get('/artikel/{article}/detail', 'ArticlesController@detail');







Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id