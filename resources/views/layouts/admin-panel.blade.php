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

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @fluxStyles
</head>

<body class="flex flex-col min-h-screen font-sans antialiased bg-white dark:bg-zinc-900 ">
    <div class="flex">
        <!-- Sidebar -->
        <div class="z-40 h-screen lg:fixed lg:w-64">
            <livewire:layout.admin-sidebar />
        </div>

        <div class="flex-1 lg:ml-64">
            <!-- Secondary Navigation -->
            <div class="sticky top-0 z-20">
                <livewire:layout.admin-secondary-navigation />
            </div>

            <!-- Primary Navigation -->
            <div class="lg:sticky lg:top-[0rem] z-50">
                <livewire:layout.admin-primary-navigation />
            </div>

            <!-- Main Content -->
            <main class="flex-1 p-8 max-lg:max-w-2xl max-lg:mx-auto">
                {{ $slot }}
            </main>
        </div>    
    </div>
    
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
