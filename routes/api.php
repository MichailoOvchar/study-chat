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

Route::post('/users', [\App\Http\Controllers\ChatController::class, 'users']);
Route::post('/chatItem/{user_id}', [\App\Http\Controllers\ChatController::class, 'chatItem']);
Route::post('/send_message', [\App\Http\Controllers\ChatController::class, 'sendMessage']);
