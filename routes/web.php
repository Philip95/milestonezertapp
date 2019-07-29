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
Route::get('/admin', ['as'=>'adminlogin', function() {
    return view ('auth.login');
}]);

/**
 * @author Eric
 */
Route::get('/kompetenzelement/{e_id?}', 'FragenController@getByElementID');

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

