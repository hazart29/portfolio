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
    @if(Route::is('home'))
    <div class="relative flex overflow-hidden flex-col items-top justify-center h-screen text-black dark:text-white bg-gray-100 dark:bg-pattern-2 sm:items-center py-4 sm:pt-0">
    @else
    <div class="relative flex overflow-hidden flex-col items-top justify-center h-screen text-black dark:text-black bg-gray-100 dark:bg-pattern-1 sm:items-center py-4 sm:pt-0">
    @endif
        <div id="menu" class="w-full h-screen">
            <header class="w-full h-1/6 ">
                @include('layouts.header')
            </header>
            <main id="main" class="w-full h-5/6 flex flex-row justify-between items-center px-20">
                @yield('content')
            </main>
        </div>
    </div>
    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" type="text/javascript"></script>
    
</body>

</html>