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
Route::get('/payment/plan6sesiones', 'PaymentController@plan6sesiones')->name('payment.6sesiones');

Route::get('/payment/plan12sesiones', 'PaymentController@plan12sesiones')->name('payment.12sesiones');

Route::get('/payment/plan6confirmado', 'PaymentController@plan6confirmado')->name('payment.plan6confirmado');

Route::get('/payment/plan12confirmado', 'PaymentController@plan12confirmado')->name('payment.plan12confirmado');

Route::get('/payment/rechazado', 'PaymentController@rechazado')->name('payment.rechazado');

Route::get('/payment/plan12sesiones', 'PaymentController@plan12sesiones')->name('payment.12sesiones');

Route::resource('payment', 'PaymentController');

//admin

Route::group(['prefix' => 'admin' , 'middleware' => 'admin'], function () {

	    Route::get('/', 'AdminController@index')->name('admin.index');
	    
	});
