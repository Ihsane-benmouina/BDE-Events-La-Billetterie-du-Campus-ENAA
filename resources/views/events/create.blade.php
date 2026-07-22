@extends('layouts.app')

@section('title', 'Créer un événement')

@section('page-title', 'Nouvel événement')

@section('content')

<div class="max-w-4xl mx-auto bg-white rounded-xl shadow p-6">

    <h2 class="text-2xl font-bold mb-6">
        Créer un événement
    </h2>

    <form action="{{ route('events.store') }}" method="POST">

        @csrf

        @include('events._form')

        <div class="mt-6 flex justify-end">

            <button
                class="bg-lime-500 hover:bg-lime-600 text-white px-6 py-2 rounded-lg">

                Enregistrer

            </button>

        </div>

    </form>

</div>

@endsection