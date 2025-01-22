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
    <!-- Primary nav bar & it's responsive sidebar -->
    <livewire:layout.primary-navigation />
    <livewire:layout.primary-sidebar />

    <!-- Dashboard responsive nav bar -->
    <livewire:layout.dashboard-navigation />

    <div class="flex flex-grow max-w-4xl px-6 mx-auto max-lg:flex-col">
        <!-- Dashboard responsive -->
        <livewire:layout.dashboard-sidebar />

        <!-- Page Content -->
        <main class="flex-grow w-full my-8 lg:my-12">
            {{ $slot }}
        </main>
    </div>

    <!-- Footer -->
    <footer class="border-t bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <livewire:layout.footer />
    </footer>

    @fluxScripts

    @persist('toast')
        <flux:toast />
    @endpersist
</body>

</html>
