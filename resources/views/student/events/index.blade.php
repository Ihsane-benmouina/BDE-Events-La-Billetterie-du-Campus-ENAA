@extends('layouts.app')

@section('title','Événements')

@section('page-title','Événements')

@section('content')

<div class="mb-8">
    <h2 class="text-2xl font-black text-slate-800 tracking-tight">
        Événements à venir
    </h2>
    <p class="text-xs text-slate-400 font-medium mt-0.5">Découvrez et réservez vos places pour les prochains événements du campus.</p>
</div>

@if(session('success'))
    <div class="mb-6 rounded-2xl bg-emerald-50/80 backdrop-blur-md border border-emerald-200/60 p-4 text-emerald-800 text-sm font-medium shadow-sm flex items-center gap-3">
        <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 9 0 0118 0z"></path></svg>
        <div>{{ session('success') }}</div>
    </div>
@endif

@if(session('error'))
    <div class="mb-6 rounded-2xl bg-rose-50/80 backdrop-blur-md border border-rose-200/60 p-4 text-rose-800 text-sm font-medium shadow-sm flex items-center gap-3">
        <svg class="w-5 h-5 text-rose-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 9 0 0118 0z"></path></svg>
        <div>{{ session('error') }}</div>
    </div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

@foreach($events as $event)

<div class="group bg-white/80 backdrop-blur-xl rounded-[2rem] border border-slate-200/80 shadow-[0_10px_30px_rgba(0,0,0,0.03)] p-6 flex flex-col justify-between transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-1">

    <div>
        <div class="flex items-start justify-between gap-3 mb-3">
            <h2 class="text-lg font-black text-slate-800 group-hover:text-teal-700 transition-colors">
                {{ $event->title }}
            </h2>
            <span class="inline-flex items-center px-3 py-1 rounded-full bg-teal-50 text-teal-700 text-xs font-black tracking-wide flex-shrink-0">
                {{ $event->price }} DH
            </span>
        </div>

        <p class="text-slate-500 text-xs font-medium line-clamp-3 mb-6 leading-relaxed">
            {{ $event->description }}
        </p>
    </div>

    <div>
        <div class="space-y-2 py-3 border-t border-slate-100 text-xs font-semibold text-slate-600">
            <div class="flex items-center gap-2">
                <span class="w-6 h-6 rounded-lg bg-slate-100 flex items-center justify-center text-slate-500">📍</span>
                <span class="truncate">{{ $event->location }}</span>
            </div>

            <div class="flex items-center gap-2">
                <span class="w-6 h-6 rounded-lg bg-slate-100 flex items-center justify-center text-slate-500">📅</span>
                <span>{{ $event->date }}</span>
            </div>
        </div>

        <form action="{{ route('student.reserve', $event) }}" method="POST" class="mt-4">
            @csrf

            <button
                type="submit"
                class="w-full group/btn relative inline-flex items-center justify-center overflow-hidden rounded-2xl bg-gradient-to-r from-teal-600 to-emerald-600 px-6 py-3 text-xs font-bold text-white shadow-md shadow-teal-600/20 transition-all duration-300 hover:shadow-teal-600/35 hover:scale-[1.01] active:scale-[0.99]">
                <span>S'inscrire</span>
            </button>
        </form>
    </div>

</div>

@endforeach

</div>

@endsection