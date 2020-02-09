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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/pretraga-zanr', 'AjaxController@pretragaZanr')->name('pretraga.zanr');
Route::get('/pesma/dodaj', 'PesmaController@dodaj')->name('pesma.dodaj');
Route::post('/pesma/store', 'PesmaController@store')->name('pesma.store');
Route::get('/korpa', 'KorpaController@index')->name('korpa');
Route::get('/korpa-dodaj/{pesmaID}', 'KorpaController@dodajUKorpu')->name('korpa.dodaj');
Route::get('/korpa-obrisi/{pesmaID}', 'KorpaController@obrisiIzKorpe')->name('korpa.obrisi');

Route::get('/narudzbine','NarudzbineController@index')->name('narudzbine');
Route::post('/narudzbina-create','NarudzbineController@create')->name('narudzbina.dodaj');

Route::get('/profil','KorisnikController@index')->name('user.profil');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});
