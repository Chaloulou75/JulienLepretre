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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('programmes', 'ProgrammeController');

Route::get('/profil', 'PagesController@index')->name('profil');

//contact

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');

//pages paiement

Route::get('/payment/plan6sesiones', 'PaymentPlan6Controller@index')->name('paymentplan6.index');
Route::post('/payment/plan6sesiones', 'PaymentPlan6Controller@store')->name('paymentplan6.store');
Route::get('/payment/plan12sesiones', 'PaymentPlan12Controller@index')->name('paymentplan12.index');
Route::post('/payment/plan12sesiones', 'PaymentPlan12Controller@store')->name('paymentplan12.store');

Route::group(['prefix' => 'admin' , 'middleware' => 'admin'], function () {

	    Route::get('/', 'AdminController@index')->name('admin.index');
	    
	});
