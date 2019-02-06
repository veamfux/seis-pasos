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

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth','admin'])->prefix('admin')->group(function (){
    Route::get('/Consulta/Reporte_mensual(A14)','PopulationController@index');
    Route::get('/Registro/Reporte_mensual(A14)','PopulationController@create');
    Route::post('/Consulta/Reporte_mensual(A14)','PopulationController@store');
    /*
    Route::get('/Formatos/Reporte_mensual(A15)','populationController@index');
    Route::get('/Formatos/Reporte_mensual(A16)','populationController@index');
    Route::get('/Formatos/Reporte_mensual(A18)','populationController@index');
    Route::get('/Formatos/Usuario',function(){ return view('auth.register'); });
    Route::get('/Consulta/usuario',function(){ return view('Consultas.Usuario'); });
    */
});
