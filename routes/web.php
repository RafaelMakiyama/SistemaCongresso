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
Route::group(['middleware' => 'auth', 'prefix'=>'admin'] , function () {
    // ROTA INDEX ADMIN
    Route::get('painel', 'GeneralController@painel');

    Route::resource('workshop', 'WorkshopController');
    Route::get('worksho/delete/{id}', ['as' => 'workshop.delete', 'uses' => 'WorkshopController@destroy']);


});


Auth::routes();
