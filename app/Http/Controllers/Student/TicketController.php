<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;




class TicketController extends Controller
{
    //
    public function index(){
        $reservations=Auth::user()
        ->reservations()
        ->with(['event','ticket'])
        ->get();
        return view('student.reservations.index', compact('reservations'));

    }

    public function show(Ticket $ticket)
    {
{
    if ($ticket->reservation->user_id != Auth::id()) {
        abort(403);
    }

    return view('student.tickets.show', compact('ticket'));
}}
}
