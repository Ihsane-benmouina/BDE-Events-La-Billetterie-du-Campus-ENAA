@extends('layouts.app')

@section('title', 'Modifier un événement')

@section('page-title', 'Modifier un événement')

@section('content')

<div class="max-w-4xl mx-auto bg-white rounded-xl shadow p-6">

    <h2 class="text-2xl font-bold mb-6">
        Modifier l'événement
    </h2>

    <form action="{{ route('events.update', $event) }}" method="POST">

        @csrf
        @method('PUT')

        @include('events._form')

        <div class="mt-6 flex justify-end">

            <button
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">

                Mettre à jour

            </button>

        </div>

    </form>

</div>

@endsection