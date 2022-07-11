<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//RUTAS DE USUARIOS 
Route::get('usuarios', [UserController::class, 'list']);
Route::get('usuarios/{usuario}', [UserController::class, 'show']);
Route::post('usuarios', [UserController::class, 'store']);
Route::put('usuarios/{usuario}', [UserController::class, 'update']);
Route::delete('usuarios/{usuario}', [UserController::class, 'destroy']);
//hola kelly desde dev2