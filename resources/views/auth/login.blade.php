@extends('layouts.guest')

@section('title','Connexion')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-[#f0f4f8] overflow-hidden selection:bg-teal-500 selection:text-white px-4">
    <!-- Ambient Background Blobs -->
    <div class="absolute -top-24 -left-20 w-96 h-96 bg-teal-200/50 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-20 w-96 h-96 bg-emerald-200/40 rounded-full blur-3xl pointer-events-none"></div>

    <x-auth-card>
        <div class="text-center mb-8">
            <x-logo />
            <h1 class="text-3xl font-extrabold mt-4 text-slate-800 tracking-tight">
                BDE Events
            </h1>
            <p class="text-slate-500 text-sm mt-1 font-medium">
                Billetterie du Campus ENAA
            </p>
        </div>

        @if ($errors->has('email'))
        <div class="mb-5 rounded-2xl bg-rose-50 border border-rose-200/60 p-4 text-rose-600 text-sm font-medium animate-fade-in flex items-center gap-2">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 9 0 0118 0z"></path></svg>
            <span>{{ $errors->first('email') }}</span>
        </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}" class="space-y-4">
            @csrf

            <x-input
                label="Adresse Email"
                name="email"
                type="email"/>

            <x-input
                label="Mot de passe"
                name="password"
                type="password"/>

            <div class="pt-2">
                <x-button>
                    Se connecter
                </x-button>
            </div>
        </form>
    </x-auth-card>
</div>
@endsection