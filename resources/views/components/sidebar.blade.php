<aside class="w-64 bg-[#0d1520] text-slate-300 min-h-screen flex flex-col justify-between p-4 border-r border-slate-800/60">
    <div>
        <div class="p-4 mb-6 flex items-center gap-3">
            <div class="w-9 h-9 rounded-xl bg-teal-500/20 border border-teal-500/40 flex items-center justify-center text-teal-400 font-bold">
                B
            </div>
            <h2 class="text-lg font-bold text-white tracking-wide">
                BDE <span class="text-teal-400 font-normal">Events</span>
            </h2>
        </div>

        <nav class="space-y-1.5">
            @if(Auth::user()->role == 'admin')
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold transition-all duration-200 text-white bg-slate-800/80 shadow-inner border border-slate-700/50">
                    <span class="w-2 h-2 rounded-full bg-teal-400"></span>
                    Dashboard
                </a>
                <a href="{{ route('events.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-medium transition-all duration-200 hover:bg-slate-800/50 hover:text-white">
                    Événements
                </a>
            @else
                <a href="{{ route('student.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-semibold transition-all duration-200 text-white bg-slate-800/80 border border-slate-700/50">
                    Dashboard
                </a>
                <a href="{{ route('student.events') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-medium transition-all duration-200 hover:bg-slate-800/50 hover:text-white">
                    Événements
                </a>
                <a href="{{ route('student.tickets') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-sm font-medium transition-all duration-200 hover:bg-slate-800/50 hover:text-white">
                    Mes Réservations
                </a>
            @endif
        </nav>
    </div>
</aside>