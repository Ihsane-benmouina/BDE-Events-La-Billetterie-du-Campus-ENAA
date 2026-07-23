<?php

namespace App\Http\Controllers\Student;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Str;

class ReservationController extends Controller
{
    //
    public function store(Event $event){
      if($event->reservations()->count() >= $event->capacity){
        return back()->with('error', 'cet evenement est complet');
      }
      $alreadyReserved= Reservation::where('user_id', Auth::id())
      ->where('event_id', $event->id)
      ->exists();

      if($alreadyReserved){
        return back()->with('error', 'vous etes deja inscrit a cet evenement');

      }

      $reservation =Reservation::create([
        'user_id'=>Auth::id(),
        'event_id'=>$event->id,
        'reservation_code' => 'BDE-'.date('Y').'-'.strtoupper(Str::random(5)),
        'status'=>'confirmed',
      ]);
      Ticket::create([
        'reservation_id'=>$reservation->id,
        'ticket_code'=>'PASS-'.date('Y').'-'.strtoupper(Str::random(6)),
      ]);
      return back()->with('success', 'Reservation effctuer evec suces');
    }
}
