<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
            <!-- Page Heading -->
            
                <header class=" bg-blue-950 shadow">
                    <div class=" mx-auto py-6 px-4 lg:px-8 w-full inline-flex text-center ">
                        <div class="text-center">
                            <p class="">
                               
                            </p>
                        </div>

                        @if (Route::has('login'))
                        <div class="text-xl md:text-3xl text-gray-300 font-bold text-center ">
                            @auth
                            <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            @else
                            <a href="{{ route('login') }}" class="text-center">Login</a>
                            @endauth
                            </div>
                        @endif
                    </div>
                </header>
            

            <!-- Page Content -->
            <main >
            @livewire('mapeo')
            </main>
               
        

        @stack('modals')

        @livewireScripts
    </body>
</html>