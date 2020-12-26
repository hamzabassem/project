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


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/','DashboardController@index')->name('dashhome');
    // users route
    Route::get('/users','PostUserController@index')->name('users');
    Route::get('/addusers','PostUserController@create')->name('addusers');
    Route::post('/store','PostUserController@store')->name('storeuser');
    Route::get('/deleteuser/{id}','PostUserController@destroy')->name('deleteuser');
    Route::get('/edituser/{id}','PostUserController@edit')->name('edituser');
    Route::post('/updateuser/{id}','PostUserController@update')->name('updateusers');
    // books route
    Route::get('/books','PostController@index')->name('dbooks');
    Route::get('/addbooks','PostController@create')->name('addbooks');
    Route::post('/bookstore','PostController@store')->name('storebook');
    Route::post('/storebooks','PostController@store')->name('storebook');
    Route::get('/deletebook/{id}','PostController@destroy')->name('deletebook');
    Route::get('/editbook/{id}','PostController@edit')->name('editbook');
    Route::post('/updatebook/{id}','PostController@update')->name('updatebook');
    // messages route
    Route::get('/allmessages','MessageController@index')->name('showmessages');
    Route::get('/deletemessages/{id}','MessageController@destroy')->name('deletemessage');





});


Route::middleware('throttle:5,1')->group(function (){
    Route::get('/','FontSiteController@index')->name('home');
    Route::get('/books','FontSiteController@index2')->name('books');
    Route::get('/book/{id}','FontSiteController@show')->name('book');
    Route::post('/messages','MessageController@store')->name('messages');
});






Auth::routes();


