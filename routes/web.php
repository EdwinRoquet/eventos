<?php

use Illuminate\Support\Facades\Auth;
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
//Ruta Dashboard
Route::get('/home', 'HomeController@index')->name('home');
//Usuarios
Route::get('/usuario', 'UsuarioController@index')->name('usuario.index');
Route::get('/usuario/create', 'UsuarioController@create')->name('usuario.create');
Route::post('/usuario', 'UsuarioController@store')->name('usuario.store');
Route::delete('/usuario/borrar/{usuario}', 'UsuarioController@destroy')->name('usuario.destroy');

//Distritos
Route::get('/distritos', 'DistritoController@index')->name('distritos.index');
Route::get('/distritos/create', 'DistritoController@create')->name('distritos.create');
Route::post('/distritos', 'DistritoController@store')->name('distritos.store');
Route::delete('/distritos/{distrito}', 'DistritoController@destroy')->name('distritos.destroy');

//Actividades
Route::get('/actividad', 'ActividadController@index')->name('actividad.index');
Route::get('/actividad/create', 'ActividadController@create')->name('actividad.create');
Route::post('/actividad', 'ActividadController@store')->name('actividad.store');
Route::delete('/actividad/{actividad}', 'ActividadController@destroy')->name('actividad.destroy');

//Eventos
Route::get('/evento', 'EventoController@index')->name('evento.index');
Route::get('/evento/create', 'EventoController@create')->name('evento.create');
Route::post('/evento', 'EventoController@store')->name('evento.store');
Route::delete('/evento/{evento}', 'EventoController@destroy')->name('evento.destroy');

Route::get('/evento/json', 'EventoController@datosJson');

//Exportar Excel
Route::get('/evento-list-excel', 'EventoController@exportExcel')->name('evento.excel');


Auth::routes();

