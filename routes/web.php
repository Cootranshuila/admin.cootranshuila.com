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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/servicio-especial/ver/{id}', 'ServicioEspecialController@ver_contrato')->name('ver-contrato');


// Rutas para Servicio Especial
Route::group(['middleware' => ['permission:servicio especial|universal']], function () {
    Route::get('/servicio-especial', 'ServicioEspecialController@index')->name('servicio-especial');
    Route::get('/servicio-especial/crear', 'ServicioEspecialController@crear');
    Route::post('/servicio-especial/create', 'ServicioEspecialController@create');
    Route::get('/servicio-especial/ver_contrato/{id}', 'ServicioEspecialController@ver_contrato')->name('ver-contrato');
});