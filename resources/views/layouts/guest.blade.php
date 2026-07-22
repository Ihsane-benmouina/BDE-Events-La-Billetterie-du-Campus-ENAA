<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body
class="min-h-screen
bg-gradient-to-br
from-primary
via-slate-900
to-slate-950">

@yield('content')

</body>

</html>