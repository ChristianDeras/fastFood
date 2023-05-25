<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\SucursalController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/categoria', [CategoriaController::class, 'store']);
Route::get('/categoria', [CategoriaController::class, 'index']);

Route::post('/sucursales-add', [SucursalController::class, 'store']);
Route::get('/sucursales', [SucursalController::class, 'index']);

Route::post('/inventario-add', [InventarioController::class, 'store']);
Route::get('/inventario', [InventarioController::class, 'index']);