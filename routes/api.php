<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


/* Index */
Route::get('/tienda', [TiendaController::class, 'index']);
/* Create */
Route::post('/tienda', [TiendaController::class, 'store']);
/* Update */
Route::put('/tienda/{id}', [TiendaController::class, 'update']);
/* Delete */
Route::delete('/tienda/{id}', [TiendaController::class, 'destroy']);