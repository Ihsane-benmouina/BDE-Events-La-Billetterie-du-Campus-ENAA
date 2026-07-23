<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller
{
    //
    public function index(){
        $eventsCount= Event::count();
        $studentsCount= User::where('role','student')->count();
        $reservationsCount= Reservation::count();
        $events= Event::withCount('reservations')->get();
        return view('admin.dashboard', compact(
            'eventsCount',
            'studentsCount',
            'reservationsCount',
            'events',


        ));

    }
}
