<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})
->middleware(['auth', 'isAdmin'])
->name('admin.dashboard');

Route::get('/student/dashboard', function () {
    return view('student.dashboard');
})
->middleware('auth')
->name('student.dashboard');