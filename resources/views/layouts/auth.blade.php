<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env("APP_NAME")}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    @livewireStyles
    @livewireScripts

    <style>
        .dropdown:focus-within .dropdown-menu {
            opacity: 1;
            transform: translate(0) scale(1);
            visibility: visible;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <nav class="bg-white dark:bg-gray-800 shadow-md fixed top-0 left-0 right-0 z-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <!-- Updated flex alignment -->
                    <h1 class="font-bold text-gray-500 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">
                        <a style="all: inherit" href="{{url('/home')}}">{{env('APP_NAME')}}</a>
                    </h1>
                    @if (Route::has('login'))
                    @auth
                    <div>
                        <a href="{{ url('/home') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white mr-4">Home</a>
                        @livewire('user-drop-down')
                    </div>
                    @else
                    <div>
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    </div>
                    @endauth
                    @endif
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</body>

</html>
