@extends('layouts.app')

@section('title', 'Événements')

@section('page-title', 'Gestion des événements')

@section('content')

<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">

    <div>
        <h2 class="text-2xl font-black text-slate-800 tracking-tight">
            Liste des événements
        </h2>
        <p class="text-xs text-slate-400 font-medium mt-0.5">Gérez et consultez tous les événements de la plateforme.</p>
    </div>

    <a href="{{ route('events.create') }}"
       class="inline-flex items-center gap-2 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-700 hover:to-emerald-700 text-white font-semibold px-5 py-2.5 rounded-2xl shadow-md shadow-teal-600/20 transition-all duration-200 hover:scale-[1.02] text-sm">
        <span>+ Nouvel événement</span>
    </a>

</div>

@if($events->count())

<div class="bg-white/80 backdrop-blur-xl rounded-[2rem] border border-slate-200/80 shadow-[0_10px_30px_rgba(0,0,0,0.03)] overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">

            <thead>
                <tr class="border-b border-slate-200/60 bg-slate-50/50 text-slate-400 text-[11px] font-bold uppercase tracking-wider">
                    <th class="p-4 pl-6">Titre</th>
                    <th class="p-4">Date</th>
                    <th class="p-4">Lieu</th>
                    <th class="p-4">Prix</th>
                    <th class="p-4">Capacité</th>
                    <th class="p-4 text-center pr-6">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100 text-sm font-medium text-slate-700">

            @foreach($events as $event)

                <tr class="hover:bg-slate-50/60 transition-colors duration-150">

                    <td class="p-4 pl-6 font-bold text-slate-900">{{ $event->title }}</td>

                    <td class="p-3">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-xl bg-slate-100 text-slate-600 text-xs font-semibold">
                            {{ $event->date }}
                        </span>
                    </td>

                    <td class="p-4 text-slate-500">{{ $event->location }}</td>

                    <td class="p-4">
                        <span class="font-extrabold text-teal-700">{{ $event->price }} DH</span>
                    </td>

                    <td class="p-4 text-slate-500">{{ $event->capacity }} places</td>

                    <td class="p-4 text-center pr-6">
                        <div class="flex justify-center items-center gap-2">

                            <a href="{{ route('events.edit', $event) }}"
                                class="p-2 rounded-xl bg-teal-50 text-teal-700 hover:bg-teal-100 text-xs font-bold transition duration-200">
                                Modifier
                            </a>

                            <form action="{{ route('events.destroy', $event) }}"
                                method="POST"
                                onsubmit="return confirm('Voulez-vous vraiment supprimer cet événement ?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="p-2 rounded-xl bg-rose-50 text-rose-600 hover:bg-rose-100 text-xs font-bold transition duration-200">
                                    Supprimer
                                </button>

                            </form>

                        </div>
                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>
    </div>
</div>

<div class="mt-6">
    {{ $events->links() }}
</div>

@else

<div class="bg-white/80 backdrop-blur-xl rounded-[2rem] border border-slate-200/80 shadow-sm p-12 text-center">
    <div class="w-16 h-16 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-4">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
    </div>
    <h3 class="text-base font-bold text-slate-700 mb-1">Aucun événement disponible</h3>
    <p class="text-xs text-slate-400">Cliquez sur le bouton ci-dessus pour ajouter votre premier événement.</p>
</div>

@endif

@endsection