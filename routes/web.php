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
Route::resource('users','UsersController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/uploadfile','UploadfileController@index');
// Route::post('/uploadfile','UploadfileController@upload');
// Route::get('/main','MainController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home', 'HomeController');

Route::group(['middleware' => 'admin'], function(){
    
    Route::get('/admin', function(){
        return view ('admin');
    });
});
