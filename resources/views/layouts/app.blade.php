<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'BDE Events')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @include('components.sidebar')

        <div class="flex-1 flex flex-col">

            @include('components.navbar')

            <main class="p-6">

                @include('components.flash-message')
                @if(session('success'))

                <div class="mb-6 rounded-lg bg-green-100 border border-green-300 p-4 text-green-700">

                    {{ session('success') }}

                </div>

                @endif

                @yield('content')

            </main>

        </div>

    </div>

</body>

</html>