@extends('layouts.app')

@section('title','Événements')

@section('page-title','Événements')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

@foreach($events as $event)

<div class="bg-white rounded-xl shadow p-6">

    <h2 class="text-xl font-bold">

        {{ $event->title }}

    </h2>

    <p class="text-gray-500 mt-2">

        {{ $event->description }}

    </p>

    <p class="mt-3">

        📍 {{ $event->location }}

    </p>

    <p>

        📅 {{ $event->date }}

    </p>

    <p>

        💰 {{ $event->price }} DH

    </p>

    <button
        class="mt-4 w-full bg-lime-500 text-white py-2 rounded-lg">

        S'inscrire

    </button>

</div>

@endforeach

</div>

@endsection