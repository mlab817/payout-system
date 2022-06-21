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

Route::get('/stations', [\App\Http\Controllers\API\StationController::class,'index'])
    ->name('api.stations.index');

Route::get('/operators', [\App\Http\Controllers\API\OperatorController::class,'index'])
    ->name('api.operators.index');

Route::get('/vehicles', [\App\Http\Controllers\API\VehicleController::class,'index'])
    ->name('api.vehicles.index');

Route::get('/payment-schemes', [\App\Http\Controllers\API\PaymentSchemeController::class, 'index'])
    ->name('api.payment-schemes.index');

Route::apiResource('validated-trips', \App\Http\Controllers\API\ValidateTripController::class);
Route::apiResource('daily-payouts', \App\Http\Controllers\API\DailyPayoutController::class);
Route::apiResource('weekly-payouts', \App\Http\Controllers\API\WeeklyPayoutController::class);
Route::apiResource('service-plans', \App\Http\Controllers\API\ServicePlanController::class);
