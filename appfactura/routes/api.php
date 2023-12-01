<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
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

/* MOTODOS PARA CLIENTE */
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/{id}', [ClienteController::class, 'show']);
Route::post('clientes', [ClienteController::class, 'store']);
Route::put('clientes/{id}', [ClienteController::class, 'update']);
Route::delete('clientes/{id}', [ClienteController::class, 'destroy']);


/* METODOS PARA PRODUCTO */
Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/{producto}', [ProductoController::class, 'show']);
Route::post('productos', [ProductoController::class, 'store']);
Route::put('productos/{producto}', [ProductoController::class, 'update']);
Route::delete('productos/{producto}', [ProductoController::class, 'destroy']);
