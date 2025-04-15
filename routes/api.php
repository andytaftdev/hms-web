<?php


// use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\api\ProductController as ProductControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('login', [AuthController::class, 'login']);

// Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Route::post('register', [AuthController::class, 'register']);

Route::get('all-data', [ProductControllerApi::class, 'create']);
Route::get('all-product', [ProductControllerApi::class, 'getAllProduct']);
Route::post('send-product', [ProductControllerApi::class, 'dashboardSend']);
Route::post('send-bahan', [ProductControllerApi::class, 'sendBahan']);



