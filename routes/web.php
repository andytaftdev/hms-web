<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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


Route::middleware(['auth', 'verified_and_approved'])->group(function () {
    Route::resource('dashboard', ProductController::class);
});

Route::middleware('web')->group(function () {
    Route::get('calculate', [ProductController::class, 'calculate'])->name('calculate');
});

Route::get('/verify-page', function () {
    $user = Auth::user();

    return view('verify-page', [
        'verified' => $user?->hasVerifiedEmail(),
        'approved' => $user?->is_approved ?? false,
    ]);
})->middleware(['auth'])->name('verify-page');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); // Verifikasi email

    $user = $request->user();

    // Ambil status approval
    $isApproved = $user->is_approved; // ganti sesuai nama kolom kamu

    // Redirect ke verify-page dengan query string atau session
    return redirect()->route('verify-page')->with([
        'verified' => true,
        'approved' => $isApproved,
    ]);
})->middleware(['auth', 'signed'])->name('verification.verify');

// Tampilkan halaman verifikasi email
Route::middleware('auth')->get('/email/verify', function () {
    return view('verify-page'); // Ganti dengan view kamu
})->name('verification.notice');

// Kirim ulang link verifikasi
Route::middleware(['auth', 'throttle:6,1'])->post('/email/verification-notification', function () {
    request()->user()->sendEmailVerificationNotification();
    return back()->with('status', 'Verification link sent!');
})->name('verification.send');

