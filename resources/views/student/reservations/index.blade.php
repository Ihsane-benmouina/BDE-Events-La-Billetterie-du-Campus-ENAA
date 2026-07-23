@extends('layouts.app')

@section('title','Mes Réservations')

@section('page-title','Mes Réservations')

@section('content')

<div class="mb-8">
    <h2 class="text-2xl font-black text-slate-800 tracking-tight">
        Mes Réservations
    </h2>
    <p class="text-xs text-slate-400 font-medium mt-0.5">Retrouvez tous vos billets et l'historique de vos réservations.</p>
</div>

@if($reservations->isEmpty())

<div class="bg-white/80 backdrop-blur-xl rounded-[2rem] border border-slate-200/80 shadow-sm p-12 text-center">
    <div class="w-16 h-16 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-4">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 002 2 2 2 0 010 4 2 2 0 00-2 2v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 00-2-2 2 2 0 010-4 2 2 0 002-2V7a2 2 0 00-2-2H5z"></path></svg>
    </div>
    <h3 class="text-base font-bold text-slate-700 mb-1">Aucune réservation pour le moment</h3>
    <p class="text-xs text-slate-400">Vous n'avez effectué aucune réservation d'événement.</p>
</div>

@else

<div class="space-y-4">

@foreach($reservations as $reservation)

<div class="group bg-white/80 backdrop-blur-xl rounded-[2rem] border border-slate-200/80 shadow-[0_10px_30px_rgba(0,0,0,0.03)] p-6 transition-all duration-300 hover:shadow-[0_15px_35px_rgba(0,0,0,0.06)]">

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">

        <div class="space-y-3 flex-1">

            <div class="flex items-center gap-3">
                <h3 class="text-lg font-black text-slate-800">
                    {{ $reservation->event->title }}
                </h3>

                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-extrabold uppercase tracking-wider
                    @if(strtolower($reservation->status) === 'confirmed' || strtolower($reservation->status) === 'valide' || strtolower($reservation->status) === 'valid')
                        bg-emerald-50 text-emerald-700 border border-emerald-200/60
                    @else
                        bg-slate-100 text-slate-600 border border-slate-200
                    @endif">
                    {{ ucfirst($reservation->status) }}
                </span>
            </div>

            <div class="flex flex-wrap items-center gap-4 text-xs font-semibold text-slate-500">
                <div class="flex items-center gap-1.5">
                    <span class="text-slate-400">📅</span>
                    <span>{{ $reservation->event->date }}</span>
                </div>

                <div class="flex items-center gap-1.5">
                    <span class="text-slate-400">📍</span>
                    <span>{{ $reservation->event->location }}</span>
                </div>
            </div>

            <div class="inline-flex items-center gap-2 bg-slate-50 px-3 py-1.5 rounded-xl border border-slate-200/60 text-xs text-slate-600 font-mono">
                <span class="font-sans font-bold text-slate-400 uppercase tracking-wider text-[10px]">Code:</span>
                <span class="font-extrabold text-teal-700">{{ $reservation->reservation_code }}</span>
            </div>

        </div>

        <div class="self-end sm:self-center">

            @if($reservation->ticket)

            <a href="{{ route('student.ticket.show',$reservation->ticket->id) }}"
                class="inline-flex items-center gap-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-700 hover:to-emerald-700 text-white font-bold px-5 py-2.5 rounded-2xl shadow-md shadow-teal-600/20 text-xs transition-all duration-200 hover:scale-[1.02]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 002 2 2 2 0 010 4 2 2 0 00-2 2v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 00-2-2 2 2 0 010-4 2 2 0 002-2V7a2 2 0 00-2-2H5z"></path></svg>
                <span>Voir mon ticket</span>
            </a>

            @endif

        </div>

    </div>

</div>

@endforeach

</div>

@endif

@endsection