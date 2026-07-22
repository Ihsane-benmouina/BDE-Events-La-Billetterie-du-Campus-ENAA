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

            @yield('content')

        </main>

    </div>

</div>

</body>

</html>