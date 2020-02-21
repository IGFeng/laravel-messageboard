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

use App\Http\Controllers\addController;
use App\Http\Controllers\loginController;


Route::any('add',['uses'=>'addController@add']);
Route::any('register',['uses'=>'registerController@register']);
Route::any('trans',['uses'=>'registerController@trans']);
Route::any('verify/{id}/{ac}',['uses'=>'actionController@action']);
Route::any('delete/{id}/{ac}',['uses'=>'actionController@action']);
Route::any('settop/{id}/{ac}',['uses'=>'actionController@action']);
Route::any('unsettop/{id}/{ac}',['uses'=>'actionController@action']);
Route::any('create',['uses'=>'addController@create']);
Route::any('reply/{id}/{ac}',['uses'=>'replyController@reply']);
Route::any('edit/{id}',['uses'=>'replyController@edit']);
Route::group(['middleware' => ['web']], function () {
    Route::any('login',['uses'=>'loginController@login']);
    Route::any('index',['uses'=>'indexController@index']);
    Route::any('admin',['uses'=>'loginController@admin']);
    Route::any('logout',['uses'=>'loginController@logout']);
    Route::get('/',['uses'=>'welcomeController@welcome']);
});
