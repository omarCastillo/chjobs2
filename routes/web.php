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

Route::get('/home', 'HomeController@index');

Route::get('nueva-vacante', function () {
    return view('nueva-vacante');
});

Route::get('registro-postulante', function () {
    return view('registro-postulante');
});
// Route::get('registro-postulante', 'registroPostulante@registrar_nuevo_postulante');

Route::get('consulta-postulantes', function () {
    return view('consulta-postulantes');
});

Route::get('consulta-vacantes', function () {
    return view('consulta-vacantes');
});