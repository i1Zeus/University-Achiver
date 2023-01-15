<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>University Archive</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/windicss-runtime-dom"></script>
    <script src="https://code.iconify.design/3/3.0.1/iconify.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="icon" type="image/png" href="image/logo.svg">
    <!-- <link rel="icon" type="image/png" href="image/archive.png"> -->
    <!-- Styles -->

    @livewireStyles
</head>

<body class="antialiased font-Tajawal bg-background-200" dir="rtl">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        <livewire:ui.curve />
        <!-- Page Content -->
        <main class="relative mx-20 mt-10">
            <livewire:navbar />
            {{ $slot }}
        </main>
    </div>

    @stack('modals')
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
</body>

</html>