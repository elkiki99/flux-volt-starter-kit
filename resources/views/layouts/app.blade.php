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

<body class="flex flex-col min-h-screen font-sans antialiased bg-white dark:bg-zinc-950">
    <!-- Primary nav bar & it's responsive sidebar -->
    <livewire:layout.primary-navigation />
    <livewire:layout.primary-sidebar />

    <!-- Main -->
    <main class="flex-grow w-full py-3">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="border-t bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <livewire:layout.footer />
    </footer>

    @fluxScripts

    @persist('toast')
        <flux:toast />
    @endpersist
</body>

{{-- Wire navigate bug fix for dropdown links --}}
<script>
    document.addEventListener("livewire:navigate", () => {
        const htmlElement = document.documentElement;
        if (htmlElement.hasAttribute("style")) {
            htmlElement.removeAttribute("style");
        }
    });
</script>

</html>
