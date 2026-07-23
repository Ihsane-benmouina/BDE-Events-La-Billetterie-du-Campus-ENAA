@extends('layouts.app')

@section('title','Mon Ticket')

@section('page-title','Mon Ticket')

@section('content')

<div class="max-w-xl mx-auto py-4">

    <!-- Ticket Card Container -->
    <div class="bg-white/80 backdrop-blur-xl rounded-[2.5rem] border border-slate-200/80 shadow-[0_20px_50px_rgba(0,0,0,0.06)] overflow-hidden transition-all duration-300">

        <!-- Header Pass -->
        <div class="bg-gradient-to-r from-teal-600 to-emerald-600 text-white p-8 text-center relative overflow-hidden">
            <div class="absolute -right-8 -top-8 w-32 h-32 bg-white/10 rounded-full blur-xl pointer-events-none"></div>
            
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 mb-3 text-2xl">
                🎟️
            </div>
            <h1 class="text-2xl font-black tracking-tight">
                BDE EVENTS
            </h1>
            <span class="inline-block mt-1 px-3.5 py-1 rounded-full bg-white/20 backdrop-blur-md text-xs font-extrabold uppercase tracking-widest text-white/90">
                Pass Étudiant
            </span>
        </div>

        <!-- Body Content -->
        <div class="p-8 space-y-6">

            <div class="grid grid-cols-2 gap-4 pb-4 border-b border-slate-100">
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Nom de l'étudiant</p>
                    <h3 class="font-bold text-slate-800 text-base mt-0.5">
                        {{ Auth::user()->name }}
                    </h3>
                </div>

                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Code Ticket</p>
                    <h3 class="font-mono font-black text-teal-600 text-base mt-0.5">
                        {{ $ticket->ticket_code }}
                    </h3>
                </div>
            </div>

            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Événement</p>
                <h2 class="text-xl font-black text-slate-900 mt-1">
                    {{ $ticket->reservation->event->title }}
                </h2>
            </div>

            <div class="grid grid-cols-2 gap-5 bg-slate-50/70 p-5 rounded-2xl border border-slate-100">
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">📅 Date</p>
                    <strong class="text-xs font-bold text-slate-700 block mt-1">
                        {{ $ticket->reservation->event->date }}
                    </strong>
                </div>

                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">🕒 Heure</p>
                    <strong class="text-xs font-bold text-slate-700 block mt-1">
                        {{ $ticket->reservation->event->time }}
                    </strong>
                </div>

                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">📍 Lieu</p>
                    <strong class="text-xs font-bold text-slate-700 block mt-1">
                        {{ $ticket->reservation->event->location }}
                    </strong>
                </div>

                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Réservation</p>
                    <strong class="text-xs font-mono font-extrabold text-teal-700 block mt-1">
                        {{ $ticket->reservation->reservation_code }}
                    </strong>
                </div>
            </div>

        </div>

        <!-- Footer Instructions -->
        <div class="bg-slate-50/80 px-6 py-4 text-center border-t border-slate-100 text-xs font-medium text-slate-400">
            Présentez ce ticket le jour de l'événement.
        </div>

    </div>

</div>

@endsection