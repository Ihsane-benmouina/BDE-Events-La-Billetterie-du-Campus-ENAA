<aside class="w-64 bg-slate-900 text-white min-h-screen">

    <div class="p-6 border-b border-slate-700">
        <h2 class="text-2xl font-bold text-lime-400">
            BDE Events
        </h2>
    </div>

    <nav class="mt-6">

        @if(Auth::user()->role == 'admin')

            <a href="{{ route('admin.dashboard') }}" class="block px-6 py-3 hover:bg-slate-800">
                Dashboard
            </a>

            <a href="{{ route('events.index') }}" class="block px-6 py-3 hover:bg-slate-800">
                Événements
            </a>

        @else

            <a href="{{ route('student.dashboard') }}" class="block px-6 py-3 hover:bg-slate-800">
                Dashboard
            </a>

            <a href="{{ route('student.events') }}" class="block px-6 py-3 hover:bg-slate-800">
                Événements
            </a>

            <a href="{{ route('student.tickets') }}" class="block px-6 py-3 hover:bg-slate-800">
                Mes Réservations
            </a>

        @endif

    </nav>

</aside>