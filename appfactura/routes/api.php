<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\EmisorController;
use App\Http\Controllers\FacturaController;
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

/* MOTODOS PARA CLIENTES */
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/{id}', [ClienteController::class, 'show']);
Route::post('clientes', [ClienteController::class, 'store']);
Route::put('clientes/{id}', [ClienteController::class, 'update']);
Route::delete('clientes/{id}', [ClienteController::class, 'destroy']);


/* METODOS PARA PRODUCTOS */
Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/{producto}', [ProductoController::class, 'show']);
Route::post('productos', [ProductoController::class, 'store']);
Route::put('productos/{producto}', [ProductoController::class, 'update']);
Route::delete('productos/{producto}', [ProductoController::class, 'destroy']);


/* RUTAS PARA EMISORES */
Route::get('emisores', [EmisorController::class, 'index']);
Route::get('emisores/{emisor}', [EmisorController::class, 'show']);
Route::post('emisores', [EmisorController::class, 'store']);
Route::put('emisores/{emisor}', [EmisorController::class, 'update']);
Route::delete('emisores/{emisor}', [EmisorController::class, 'destroy']);


/* RUTAS PARA FACTURAS */

Route::get('facturas', [FacturaController::class, 'index']);
Route::get('facturas/{factura}', [FacturaController::class, 'show']);
Route::post('facturas', [FacturaController::class, 'store']);
Route::put('facturas/{factura}', [FacturaController::class, 'update']);
Route::delete('facturas/{factura}', [FacturaController::class, 'destroy']);


/* RUTAS PARA DETALLES DE VENTA */

Route::get('detalles-venta', [DetalleVentaController::class, 'index']);
Route::get('detalles-venta/{detalleVenta}', [DetalleVentaController::class, 'show']);
Route::post('detalles-venta', [DetalleVentaController::class, 'store']);
Route::put('detalles-venta/{detalleVenta}', [DetalleVentaController::class, 'update']);
Route::delete('detalles-venta/{detalleVenta}', [DetalleVentaController::class, 'destroy']);