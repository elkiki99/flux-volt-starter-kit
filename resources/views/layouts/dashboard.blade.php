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

    <div class="container flex flex-grow max-w-4xl px-6 mx-auto max-lg:flex-col">
        <!-- Sidebar -->
        <aside class="w-[220px] shrink-0 sticky top-0 my-12 lg:mr-10 max-lg:hidden">
            <livewire:layout.dashboard-sidebar />
        </aside>

        <!-- Main -->
        <main class="flex flex-col items-center flex-grow my-8 lg:my-12">
            <div class="w-full max-w-2xl">
                {{ $slot }}
            </div>
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
