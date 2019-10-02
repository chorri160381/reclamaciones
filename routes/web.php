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

Route::resource('Solicitud','solicitudcontroller');
Route::resource('Responsable','responsablecontroller');
Route::resource('Usuario','usuariocontroller');
Route::resource('Tipo_usuario','tipousuariocontroller');
Route::resource('Tipo_documento','Tipodocumentocontroller');
Route::resource('Area','areacontroller');
Route::resource('Respuesta','respuestacontroller');
Route::resource('Sol_resp','solrespcontroller');
 