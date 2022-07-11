<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
| Cambio desde Dev1
| Cambio desde dev1
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//RUTAS DE USUARIOS 
Route::get('usuarios', 'App\Http\Controllers\UsuarioController@list');
Route::post('usuarios', 'App\Http\Controllers\UsuarioController@store');
Route::delete('usuarios/{usuario}', [UsuarioController::class, 'destroy']);
Route::put('usuarios/{usuario}', [UsuarioController::class, 'update']);
