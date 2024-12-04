<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sale Mitsubishi') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-primaryRegular h-screen text-[14px] text-gray-500 antialiased bg-gray-100">

        @include('components.content-layout.topbar')
        @include('components.content-layout.navbar')

        <main class="container mx-auto my-10">
            @yield('content')
        </main>
    
        @include('components.content-layout.footer')
        @stack('modals')

        @livewireScripts

        {{-- <script src="./node_modules/preline/dist/preline.js"></script> --}}
        @include('layouts.applicationLib')
        <script>
            $(document).ready(function() {
                console.log(`jquery is runing on application`);
            });
        </script>
        @yield('script')
    </body>
</html>
