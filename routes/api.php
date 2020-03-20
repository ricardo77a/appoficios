<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/login', 'Auth\LoginController@login')->middleware('auth.basic.once');
//Route::get('/proveedor/index', 'Proveedor\ProveedorController@index')->name('proveedor.index');


/*
	Content-Type		application/json
	X-Requested-With	XMLHttpRequest
*/
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');


    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
        /* Rutas de consulta de usuarios */
    });
});

Route::get('all-users', 'GetUsersController@all');
Route::get('get-user/', 'GetUsersController@get');
