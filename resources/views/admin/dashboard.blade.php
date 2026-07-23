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

@endsection