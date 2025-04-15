<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('index');
});
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/layanan', function () {
    return view('public/layanan/index');
});
Route::get('/tentang', function () {
    return view('public/about/index');
});
Route::get('/kontak', function () {
    return view('public/contact/index');

});
Route::resource('dashboard', ProductController::class);

Route::middleware('web')->group(function () {
    Route::get('calculate', [ProductController::class, 'calculate'])->name('calculate');
});

