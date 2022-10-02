<?php

use App\Http\Controllers\Vehicle\CarController;
use App\Http\Controllers\Vehicle\MotorController;
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

Route::post('/vehicle/motor', [MotorController::class, 'insert']);
Route::get('/vehicle/motor', [MotorController::class, 'index']);
Route::get('/vehicle/motor/{vehicleID}', [MotorController::class, 'show']);

Route::post('/vehicle/car', [CarController::class, 'insert']);
Route::get('/vehicle/car', [CarController::class, 'index']);
Route::get('/vehicle/car/{vehicleID}', [CarController::class, 'show']);
