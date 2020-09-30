<?php

use Illuminate\Support\Facades\Route;

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
