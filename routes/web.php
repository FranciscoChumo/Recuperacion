<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tipo',[TipoController::class, 'index']);
Route::post('/tipo',[TipoController::class, 'store']);
Route::get('/empleado',[EmpleadoController::class, 'index']);
Route::post('/empleado',[EmpleadoController::class, 'store']);
Route::get('/venta/{id}',[ProductoController::class, 'showProductoVenta']);
Route::post('/venta/{id}',[ProductoController::class, 'venta']);

