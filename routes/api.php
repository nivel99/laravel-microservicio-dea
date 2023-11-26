<?php

use App\Http\Controllers\DeaController;
use App\Http\Controllers\UsuariooperadorController;
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

// Usando la nueva sintaxis para Laravel 8
Route::get('dea', [DeaController::class, 'index']);
Route::post('dea/create', [DeaController::class, 'store']);

Route::get('/usuariooperador', [UsuariooperadorController::class, 'index']);
Route::post('/usuariooperador/create', [UsuariooperadorController::class, 'store']);
Route::get('/usuariooperador/{id}', [UsuariooperadorController::class, 'show']);
Route::put('/usuariooperador/{id}', [UsuariooperadorController::class, 'update']);
Route::delete('/usuariooperador/{id}', [UsuariooperadorController::class, 'destroy']);