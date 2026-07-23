<header class="bg-white shadow px-6 py-4 flex justify-between items-center">

    <h1 class="text-xl font-bold text-slate-700">
        @yield('page-title')
    </h1>

    <div class="flex items-center gap-4">

        <span class="text-slate-600">
            {{ Auth::user()->name ?? '' }}
        </span>

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button class="text-red-600 hover:text-red-800">

                Déconnexion

            </button>
            

        </form>

    </div>

</header>