<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'BDE Events')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f0f4f8] text-slate-800 antialiased selection:bg-teal-500 selection:text-white">

    <div class="flex min-h-screen">

        @include('components.sidebar')

        <div class="flex-1 flex flex-col min-w-0">

            @include('components.navbar')

            <main class="p-6 md:p-8 flex-1 max-w-7xl w-full mx-auto">

                @include('components.flash-message')

                @yield('content')

            </main>

        </div>

    </div>

</body>

</html>