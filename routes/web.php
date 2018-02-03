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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Router All Backend
 */
Route::group(['prefix' => 'backend'], function (){

    // Dashboard
    Route::get('/', 'Backend\DashboardController@index')->name('backend.index');

    //Group Category
    Route::resource('category', 'Backend\CategoryController');

    // Group Article
    Route::resource('article','Backend\ArticleController');


});


