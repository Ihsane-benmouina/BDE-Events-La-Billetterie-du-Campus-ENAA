@extends('layouts.app')

@section('title', 'Dashboard Étudiant')

@section('page-title', 'Dashboard')

@section('content')

<!-- Welcome Banner -->
<div class="relative overflow-hidden bg-gradient-to-r from-teal-600 via-teal-700 to-emerald-600 rounded-[2.5rem] p-8 md:p-10 text-white shadow-xl shadow-teal-600/15 mb-8">
    <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>

    <div class="relative z-10 max-w-2xl">
        <span class="inline-block px-3.5 py-1 rounded-full bg-white/20 backdrop-blur-md text-xs font-extrabold uppercase tracking-widest text-white/90 mb-3">
            Espace Étudiant
        </span>
        <h2 class="text-3xl md:text-4xl font-black tracking-tight leading-tight">
            Bienvenue, {{ Auth::user()->name ?? 'Étudiant' }} 👋
        </h2>
        <p class="text-teal-100 text-sm font-medium mt-2 leading-relaxed">
            Consultez les événements disponibles sur le campus et accédez à vos tickets réservés en un coup d'œil.
        </p>
    </div>
</div>

<!-- Quick Actions Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <a href="{{ route('student.events') }}" 
       class="group bg-white/80 backdrop-blur-xl rounded-[2rem] border border-slate-200/80 shadow-[0_10px_30px_rgba(0,0,0,0.03)] p-6 transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-1 flex items-center gap-5">
        <div class="w-14 h-14 rounded-2xl bg-teal-50 text-teal-600 flex items-center justify-center text-2xl group-hover:bg-teal-600 group-hover:text-white transition-all duration-300 shadow-sm">
            📅
        </div>
        <div>
            <h3 class="text-lg font-black text-slate-800 group-hover:text-teal-700 transition-colors">
                Explorer les Événements
            </h3>
            <p class="text-xs text-slate-400 font-medium mt-0.5">
                Découvrez et réservez vos places aux activités.
            </p>
        </div>
    </a>

    <a href="{{ route('student.tickets') }}" 
       class="group bg-white/80 backdrop-blur-xl rounded-[2rem] border border-slate-200/80 shadow-[0_10px_30px_rgba(0,0,0,0.03)] p-6 transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-1 flex items-center gap-5">
        <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 shadow-sm">
            🎟️
        </div>
        <div>
            <h3 class="text-lg font-black text-slate-800 group-hover:text-emerald-700 transition-colors">
                Mes Réservations
            </h3>
            <p class="text-xs text-slate-400 font-medium mt-0.5">
                Accédez à vos billets et codes de réservation.
            </p>
        </div>
    </a>

</div>

@endsection