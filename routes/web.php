<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Student\EventController as StudentEventController;
use App\Http\Controllers\Student\ReservationController;
use App\Http\Controllers\Student\TicketController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::resource('events', EventController::class);

});

/*
|--------------------------------------------------------------------------
| Student
|--------------------------------------------------------------------------
*/

Route::prefix('student')
    ->middleware('auth')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('student.dashboard');
        })->name('student.dashboard');

        Route::get('/events', [StudentEventController::class, 'index'])
            ->name('student.events');

        Route::post('/events/{event}/reserve', [ReservationController::class, 'store'])
            ->name('student.reserve');

        Route::get('/tickets', [TicketController::class, 'index'])
            ->name('student.tickets');

        Route::get('/tickets/{ticket}', [TicketController::class, 'show'])
            ->name('student.ticket.show');

    });