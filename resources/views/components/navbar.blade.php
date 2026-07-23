<header class="bg-white/80 backdrop-blur-md border-b border-slate-200/60 px-8 py-4 flex justify-between items-center sticky top-0 z-10">
    <h1 class="text-xl font-bold text-slate-800">
        @yield('page-title')
    </h1>

    <div class="flex items-center gap-5">
        <div class="flex items-center gap-3 bg-slate-100/80 px-3 py-1.5 rounded-full border border-slate-200/60">
            <div class="w-7 h-7 rounded-full bg-teal-600 text-white flex items-center justify-center text-xs font-bold">
                {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
            </div>
            <span class="text-sm font-semibold text-slate-700 pr-1">
                {{ Auth::user()->name ?? '' }}
            </span>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="text-xs font-bold text-rose-500 hover:text-rose-700 bg-rose-50 hover:bg-rose-100 px-3.5 py-2 rounded-xl transition">
                Déconnexion
            </button>
        </form>
    </div>
</header>