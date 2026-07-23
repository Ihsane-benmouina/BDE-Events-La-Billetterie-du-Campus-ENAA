@extends('layouts.app')

@section('title','Dashboard')

@section('page-title','Dashboard')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white rounded-xl shadow p-6">
        <h3 class="text-gray-500">Événements</h3>
        <p class="text-4xl font-bold text-lime-600 mt-2">
            {{ $eventsCount }}
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
        <h3 class="text-gray-500">Étudiants</h3>
        <p class="text-4xl font-bold text-blue-600 mt-2">
            {{ $studentsCount }}
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
        <h3 class="text-gray-500">Réservations</h3>
        <p class="text-4xl font-bold text-orange-500 mt-2">
            {{ $reservationsCount }}
        </p>
    </div>
    

</div>
<div class="mt-10 bg-white rounded-xl shadow">

    <div class="p-6 border-b">
        <h2 class="text-xl font-bold">
            Suivi des capacités
        </h2>
    </div>

    <table class="w-full">

        <thead class="bg-gray-100">

        <tr>

            <th class="p-4 text-left">Événement</th>

            <th class="p-4 text-center">Capacité</th>

            <th class="p-4 text-center">Réservations</th>

            <th class="p-4 text-center">Places restantes</th>

        </tr>

        </thead>

        <tbody>

        @foreach($events as $event)

            <tr class="border-b">

                <td class="p-4">

                    {{ $event->title }}

                </td>

                <td class="text-center">

                    {{ $event->capacity }}

                </td>

                <td class="text-center">

                    {{ $event->reservations_count }}

                </td>

                <td class="text-center font-bold text-lime-600">

                    {{ $event->capacity - $event->reservations_count }}

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

@endsection