<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @fluxStyles
</head>

<body class="flex flex-col min-h-screen font-sans antialiased bg-white dark:bg-zinc-800">
    <div class="flex">
        <!-- Sidebar -->
        <div class="z-40 h-screen lg:fixed lg:w-64">
            <livewire:layout.admin-sidebar />
        </div>

        <div class="flex-1 lg:ml-64">
            <!-- Secondary Navigation -->
            <div class="sticky top-0 z-20 bg-white dark:bg-zinc-900">
                <livewire:layout.admin-secondary-navigation />
            </div>

            <!-- Primary Navigation -->
            <div class="bg-white dark:bg-zinc-900 lg:sticky lg:top-[0rem]">
                <livewire:layout.admin-primary-navigation />
            </div>

            <!-- Main Content -->
            <main class="flex-1 p-8">
                {{ $slot }}
            </main>
        </div>    
    </div>
    
    @fluxScripts
    
    @persist('toast')
        <flux:toast />
    @endpersist
</body>

</html>
