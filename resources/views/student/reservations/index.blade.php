@extends('layouts.app')

@section('title','Mes Réservations')

@section('page-title','Mes Réservations')

@section('content')

<h2 class="text-2xl font-bold mb-6">
    Mes Réservations
</h2>

@if($reservations->isEmpty())

<div class="bg-white rounded-xl shadow p-6 text-center">
    Vous n'avez effectué aucune réservation.
</div>

@else

<div class="space-y-6">

@foreach($reservations as $reservation)

<div class="bg-white rounded-xl shadow p-6">

    <div class="flex justify-between items-start">

        <div>

            <h3 class="text-xl font-bold">
                {{ $reservation->event->title }}
            </h3>

            <p class="text-gray-500 mt-2">
                📅 {{ $reservation->event->date }}
            </p>

            <p>
                📍 {{ $reservation->event->location }}
            </p>

            <p class="mt-2">
                <strong>Code réservation :</strong>
                {{ $reservation->reservation_code }}
            </p>

            <p>
                <strong>Statut :</strong>

                <span class="text-green-600 font-semibold">
                    {{ ucfirst($reservation->status) }}
                </span>
            </p>

        </div>

        <div>

            @if($reservation->ticket)

            <a href="{{ route('student.ticket.show',$reservation->ticket->id) }}"
                class="bg-lime-500 hover:bg-lime-600 text-white px-4 py-2 rounded-lg">

                Voir mon ticket

            </a>

            @endif

        </div>

    </div>

</div>

@endforeach

</div>

@endif

@endsection