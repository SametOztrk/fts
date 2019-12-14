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

Route::get('/','Anasayfa\AnasayfaController@index')->name('anasayfa');
   

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','Auth\LoginController@logout')->name('user.logout');

Route::post('/search','Anasayfa\AnasayfaController@search')->name('anasayfa.search');
Route::post('/buy','Anasayfa\AnasayfaController@buy')->name('anasayfa.buy');



Route::prefix('admin')->group(function(){

Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('/dashboard','Admin\AdminController@index')->name('admin.dashboard');



Route::post('/sehirKaydet','Admin\AddSehirController@store');
Route::post('/limanKaydet','Admin\AddHavalimanıController@store');
Route::post('/rotaKaydet','Admin\AddRotaController@store');
Route::post('/seferKaydet','Admin\AddSeferController@store');
Route::post('/ucakKaydet','Admin\AddUcakController@store');
Route::post('/planKaydet','Admin\YıllıkPlanController@store');
Route::post('/ucusKaydet','Admin\AddUcusController@store');


Route::get('/tablo','Admin\AdminController@ajax')->name('admin.tablo');




});
