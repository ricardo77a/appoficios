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
Route::resource('oficios', 'OficiosController');

Route::get('/proveedor/index', 'Proveedor\ProveedorController@index')->name('proveedor.index');
Route::get('/proveedor/create', 'Proveedor\ProveedorController@create')->name('proveedor.create');
Route::post('/proveedor/store', 'Proveedor\ProveedorController@store')->name('proveedor.store');


Route::get('/cliente/index', 'Cliente\ClienteController@index')->name('cliente.index');
Route::get('/cliente/create', 'Cliente\ClienteController@create')->name('cliente.create');
Route::post('/cliente/store', 'Cliente\ClienteController@store')->name('cliente.store');

Route::get('/cliente/servicios', 'Cliente\ServiciosController@index')->name('servicios.index');

Route::get('/agendar/cita', 'Cliente\ServiciosController@agendar')->name('agendar.cita');
