<?php


// use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\api\BahanController;
use App\Http\Controllers\api\KemasanController;
use App\Http\Controllers\api\ProductController as ProductControllerApi;
use App\Http\Controllers\UserController;
use App\Models\Bahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('login', [AuthController::class, 'login']);

// Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Route::post('register', [AuthController::class, 'register']);

Route::get('all-data', [ProductControllerApi::class, 'create']);
Route::get('all-product', [ProductControllerApi::class, 'GetAllProduct']);
Route::middleware('auth:sanctum')->get('user-home', [AuthController::class, 'getName']);
Route::get('all-kemasan', [KemasanController::class, 'getAllKemasan']);
Route::get('all-user-company', [AuthController::class, 'getAllUserCompany']);
Route::get('get-all-karyawan', [AuthController::class, 'getAllKaryawan']);
Route::get('show-product/{id}', [ProductControllerApi::class, 'showProduct']);
Route::get('show-bahan/{id}', [BahanController::class, 'showBahan']);
Route::get('show-karyawan/{id}', [AuthController::class, 'showKaryawan']);
Route::post('update-karyawan/{id}', [AuthController::class, 'updateKaryawan']);
Route::delete('delete-karyawan/{id}', [AuthController::class, 'deleteKaryawan']);
Route::get('company/{id}', [AuthController::class, 'getCompany']);
Route::get('show-kemasan/{id}', [KemasanController::class, 'showKemasan']);
Route::post('update-product/{id}', [ProductControllerApi::class, 'updateProduct']);
Route::post('update-status/{id}', [ProductControllerApi::class, 'updateStatus']);
Route::post('update-kemasan/{id}', [KemasanController::class, 'updateKemasan']);
Route::post('update-bahan/{id}', [BahanController::class, 'updateBahan']);
Route::post('approve-company/{id}', [AuthController::class, 'approveCompany']);
Route::post('send-product', [ProductControllerApi::class, 'dashboardSend']);
Route::post('send-bahan', [BahanController::class, 'sendBahan']);
Route::post('send-kemasan', [KemasanController::class, 'sendKemasan']);
Route::post('buat-karyawan', [AuthController::class, 'createKaryawan']);
Route::delete('delete-product/{id}', [ProductControllerApi::class, 'deleteProduct']);
Route::delete('delete-kemasan/{id}', [KemasanController::class, 'deleteKemasan']);
Route::delete('delete-bahan/{id}', [BahanController::class, 'deleteBahan']);
Route::delete('delete-company/{id}', [AuthController::class, 'deleteCompany']);
Route::get('all-bahan', [BahanController::class, 'getAllBahan']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('newest-bahan', [BahanController::class, 'getFiveNewest']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);



