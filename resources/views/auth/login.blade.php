@extends('layouts.guest')

@section('title','Connexion')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-slate-900">

    <x-auth-card>

        <div class="text-center mb-8">

            <x-logo />

            <h1 class="text-3xl font-bold mt-4 text-slate-800">

                BDE Events

            </h1>

            <p class="text-slate-500 mt-2">

                Billetterie du Campus ENAA

            </p>

        </div>
        @if ($errors->has('email'))

<div class="mb-5 rounded-xl bg-red-100 p-4 text-red-600">

    {{ $errors->first('email') }}

</div>

@endif

        <form

            method="POST"

            action="{{ route('login.submit') }}">

            @csrf

            <x-input

                label="Adresse Email"

                name="email"

                type="email"/>

            <x-input

                label="Mot de passe"

                name="password"

                type="password"/>

            <x-button>

                Se connecter

            </x-button>

        </form>

    </x-auth-card>

</div>

@endsection