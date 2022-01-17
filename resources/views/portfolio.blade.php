<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Misbakhul Munir - Portfolio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body class="antialiased">
    <div class="relative flex overflow-hidden flex-row justify-between items-center min-h-screen text-black dark:text-white bg-gray-100 dark:bg-pattern-2 sm:items-start pt-32 px-20 sm:pt-0">
        <div class="w-1/12 mx-10 h-screen overflow-hidden flex flex-col items-center bg-black justify-center">
            @include('layouts.sidemenu')
        </div>
        <div class="w-10/12 flex h-screen items-center pb-4 flex-shrink">
            @yield('content')
        </div>
    </div>
    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" type="text/javascript"></script>

</body>

</html>