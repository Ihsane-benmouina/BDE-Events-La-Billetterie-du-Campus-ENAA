@extends('layouts.app')

@section('title','Mon Ticket')

@section('page-title','Mon Ticket')

@section('content')

<div class="max-w-2xl mx-auto">

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">

        <div class="bg-lime-500 text-white p-6 text-center">

            <h1 class="text-3xl font-bold">
                🎟️ BDE EVENTS
            </h1>

            <p class="mt-2">
                Pass Étudiant
            </p>

        </div>

        <div class="p-8 space-y-4">

            <div class="grid grid-cols-2 gap-4">

                <div>
                    <p class="text-gray-500">Nom de l'étudiant</p>
                    <h3 class="font-bold text-lg">
                        {{ Auth::user()->name }}
                    </h3>
                </div>

                <div>
                    <p class="text-gray-500">Code Ticket</p>
                    <h3 class="font-bold text-lime-600">
                        {{ $ticket->ticket_code }}
                    </h3>
                </div>

            </div>

            <hr>

            <div>

                <p class="text-gray-500">
                    Événement
                </p>

                <h2 class="text-2xl font-bold">
                    {{ $ticket->reservation->event->title }}
                </h2>

            </div>

            <div class="grid grid-cols-2 gap-6">

                <div>

                    <p class="text-gray-500">
                        📅 Date
                    </p>

                    <strong>
                        {{ $ticket->reservation->event->date }}
                    </strong>

                </div>

                <div>

                    <p class="text-gray-500">
                        🕒 Heure
                    </p>

                    <strong>
                        {{ $ticket->reservation->event->time }}
                    </strong>

                </div>

                <div>

                    <p class="text-gray-500">
                        📍 Lieu
                    </p>

                    <strong>
                        {{ $ticket->reservation->event->location }}
                    </strong>

                </div>

                <div>

                    <p class="text-gray-500">
                        Réservation
                    </p>

                    <strong>
                        {{ $ticket->reservation->reservation_code }}
                    </strong>

                </div>

            </div>

        </div>

        <div class="bg-gray-100 p-4 text-center text-gray-500">

            Présentez ce ticket le jour de l'événement.

        </div>

    </div>

</div>

@endsection