<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="min-h-screen bg-[#0d1520] font-sans antialiased selection:bg-teal-500 selection:text-white">

@yield('content')

</body>

</html>