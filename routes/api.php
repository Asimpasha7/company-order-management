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

// Route::middleware('auth:api')->group(function () {
//     Route::resource('companies', 'Api\CompanyController');
//     Route::resource('orders', 'Api\OrderController');
// });

// // Route::middleware('auth:api')->get('/test', 'Api\CompanyController@test');
// Route::middleware('auth:api')->get('/test', 'Api\CompanyController@test');


use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\OrderController;

// Route::middleware('auth:api')->group(function () {
    Route::resource('companies', CompanyController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('test', CompanyController::class);
    // Add any other routes you need
// });

// Route::resource('companies', CompanyController::class);

// Route::middleware('auth:api')->get('/test', 'Api\CompanyController@test');

