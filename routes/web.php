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

Route::get('/home', 'HomeController@index')->name('home'
);

//testimonios
Route::resource('testimonios', 'TestimoniosController',['except' => [
    'index',
]])->middleware('admin');

Route::get('/testimonios', 'TestimoniosController@index')->name('testimonios.index');

//Programme

Route::resource('programas', 'ProgrammeController',['except' => [
    'index', 'show', 'edit',
]])->middleware('admin');

Route::get('/programas', 'ProgrammeController@index')->name('programas.index');
Route::get('/programas/{slug}', 'ProgrammeController@show')->name('programas.show');
Route::get('/programas/{slug}/edit', 'ProgrammeController@edit')->name('programas.edit')->middleware('admin');

Route::resource('/programas/{slug}/description', 'DescriptionController',['only' => [
    'store', 'update', 'destroy',
]])->middleware('admin');

//post de blog

Route::resource('blog', 'PostController', ['except' => [
    'index', 'show', 'edit',
]])->middleware('admin');

Route::get('/blog', 'PostController@index')->name('post.index');
Route::get('/blog/{slug}', 'PostController@show')->name('post.show');
Route::get('/blog/{slug}/edit', 'PostController@edit')->name('post.edit')->middleware('admin');

//profil sobre mi
Route::get('/perfil', 'PagesController@index')->name('profil');

//contact
Route::get('/contacto', 'ContactController@index')->name('contact.index');
Route::post('/contacto', 'ContactController@store')->name('contact.store');

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
