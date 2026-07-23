@extends('layouts.app')

@section('title', 'Événements')

@section('page-title', 'Gestion des événements')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h2 class="text-2xl font-bold">
        Liste des événements
    </h2>

    <a href="{{ route('events.create') }}"
       class="bg-lime-500 text-white px-4 py-2 rounded-lg hover:bg-lime-600">
        + Nouvel événement
    </a>

</div>

@if($events->count())

<table class="w-full bg-white rounded-lg shadow">

    <thead class="bg-slate-800 text-white">

        <tr>

            <th class="p-3 text-left">Titre</th>

            <th class="p-3 text-left">Date</th>

            <th class="p-3 text-left">Lieu</th>

            <th class="p-3 text-left">Prix</th>

            <th class="p-3 text-left">Capacité</th>

            <th class="p-3 text-center">Actions</th>

        </tr>

    </thead>

    <tbody>

    @foreach($events as $event)

        <tr class="border-b">

            <td class="p-3">{{ $event->title }}</td>

            <td class="p-3">{{ $event->date }}</td>

            <td class="p-3">{{ $event->location }}</td>

            <td class="p-3">{{ $event->price }} DH</td>

            <td class="p-3">{{ $event->capacity }}</td>

            <td class="p-3 text-center">

             <td class="p-3 text-center">

    <div class="flex justify-center gap-3">

        <a href="{{ route('events.edit', $event) }}"
            class="text-blue-600 hover:text-blue-800">

            Modifier

        </a>

        <form action="{{ route('events.destroy', $event) }}"
            method="POST"
            onsubmit="return confirm('Voulez-vous vraiment supprimer cet événement ?')">

            @csrf
            @method('DELETE')

            <button
                class="text-red-600 hover:text-red-800">

                Supprimer

            </button>

        </form>

    </div>

</td>

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

<div class="mt-5">

    {{ $events->links() }}

</div>

@else

<div class="bg-white rounded-lg shadow p-6 text-center">

    <p>Aucun événement disponible.</p>

</div>

@endif

@endsection