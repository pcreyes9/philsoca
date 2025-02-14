<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'PSA-INC') }}</title> --}}
        <title>ADMIN ACA</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->

        @livewireStyles

        
    </head>
    <body>
        {{-- <img  class="master-bg" src="images/bg/master.jpg" alt="ASEAN CONGRESS OF ANESTHESIOLOGISTS IN MANILA 2025"> --}}

        <div class="w-full h-full bg-no-repeat bg-cover" style="background-image: url('https://gratisography.com/wp-content/uploads/2024/11/gratisography-augmented-reality-800x525.jpg');">
            <div class="font-sans antialiased text-gray-900" >
            
                {{ $slot }}
            </div>
        </div>
        
        @livewireScripts
    </body>
</html>
