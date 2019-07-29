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
/**
 * @author Sarah
 * date: 29.07.2019
 * route for displaying home blade
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 * @author Sarah
 * date: 29.07.2019
 * route for displaying login blade, but for the admin
 */
Route::get('/adminlogin', ['as'=>'adminlogin', function() {
    return view ('auth.login');
}]);

/**
 * @author Eric
 */
Route::get('/home/verlaengerung/{id?}', 'HomeController@verlaengerung');
Route::get('/verlaengerung', function(){
    return view('verlaengerung');
});

/**
 * @author Eric
 */
Route::get('/kompetenzelement/{e_id?}', 'FragenController@getByElementID');
Route::get('/kompetenzbereich/{b_id?}', 'FragenController@getByBereichID');
Route::get('/kompetenzindikator/{i_id?}', 'FragenController@getByIndikatorID');
Route::get('/alleFragen', 'FragenController@getAllFragen');


/**
 * @author Sarah
 * date: 29.07.2019
 * route for displaying pruefungssimulations blade
 */
Route::get('/pruefungssimulation', 'PruefungController@index')->name('pruefung');

/**
 * @author Sarah
 * date: 29.07.2019
 * route for displaying uebungsmodus blade
 */
Route::get('/uebungsmodus', 'BereicheController@index')->name('uebung');

/**
 * @author Sarah
 * date: 29.07.2019
 * route for displaying adminbereich in admin blade
 */
Route::get('/admin', 'PersonenRolleController@index')->name('admin');
