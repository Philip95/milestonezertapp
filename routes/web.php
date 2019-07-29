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

Route::get('/admin', ['as'=>'adminlogin', function() {
    return view ('auth.login');
}]);
Route::get('/home/verlaengerung/{id?}', 'HomeController@verlaengerung');
Route::get('/verlaengerung', function(){
    return view('verlaengerung');
});
Route::get('/kompetenzelement/{e_id?}', 'FragenController@getByElementID');
