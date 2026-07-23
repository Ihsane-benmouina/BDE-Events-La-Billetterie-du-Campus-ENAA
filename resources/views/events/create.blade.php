@extends('layouts.app')

@section('title', 'Créer un événement')

@section('page-title', 'Nouvel événement')

@section('content')

<div class="max-w-4xl mx-auto bg-white/80 backdrop-blur-xl rounded-[2rem] border border-slate-200/80 shadow-[0_10px_30px_rgba(0,0,0,0.04)] p-8 my-6">

    <div class="flex items-center justify-between mb-8 pb-4 border-b border-slate-100">
        <div>
            <h2 class="text-2xl font-black text-slate-800">
                Créer un événement
            </h2>
            <p class="text-xs text-slate-400 font-medium mt-1">Remplissez les détails ci-dessous pour publier un nouvel événement.</p>
        </div>
    </div>

    <form action="{{ route('events.store') }}" method="POST">

        @csrf

        @include('events._form')

        <div class="mt-8 pt-4 border-t border-slate-100 flex justify-end gap-3">

            <button
                type="submit"
                class="bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-700 hover:to-emerald-700 text-white font-semibold px-8 py-3 rounded-2xl shadow-md shadow-teal-600/20 transition-all duration-200 hover:scale-[1.02]">
                Enregistrer
            </button>

        </div>

    </form>

</div>

@endsection