@extends('layouts.app')

@section('title','Événements')

@section('page-title','Événements')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

@if(session('success'))
    <div class="mb-4 bg-green-100 text-green-700 p-3 rounded">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="mb-4 bg-red-100 text-red-700 p-3 rounded">
        {{ session('error') }}
    </div>
@endif
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

   <form action="{{ route('student.reserve', $event) }}" method="POST">

    @csrf
 
    <button
        class="mt-4 w-full bg-lime-500 hover:bg-lime-600 text-white py-2 rounded-lg">

        S'inscrire

    </button>

</form>

</div>

@endforeach

</div>

@endsection