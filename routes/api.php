<?php

use App\Http\Controllers\AuthController;
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

Route::post('/login', [AuthController::class, 'Login']);


Route::get('/fc', [AuthController::class, 'FC']);


Route::middleware('auth:api')->get('/get-user', [AuthController::class, 'Get']);
Route::middleware('auth:api')->get('/authcheck', [AuthController::class, 'check']);
