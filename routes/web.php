<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;


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



Route::get('/student/dashboard', function () {
    return view('student.dashboard');
})
->middleware('auth')
->name('student.dashboard');

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::resource('events', EventController::class);
      Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('admin.dashboard');

});
Route::middleware(['auth'])
    ->prefix('student')
    ->group(function () {

        Route::get('/events', [\App\Http\Controllers\Student\EventController::class, 'index'])
            ->name('student.events');

    });