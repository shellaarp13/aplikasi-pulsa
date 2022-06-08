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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/pulsas',[PulsaController::class, 'index']);
Route::get('/pulsas/{id}',[PulsaController::class, 'show']);
Route::get('/Bill/{id}', [BillController::class, 'sendNotification']);
Route::post('/pulsas',[PulsaController::class, 'store']);
Route::put('/pulsas/{id}',[PulsaController::class, 'update']);
Route::delete('/pulsas/{id}',[PulsaController::class, 'destroy']);