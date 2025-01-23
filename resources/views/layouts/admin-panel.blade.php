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
    <flux:sidebar sticky stashable class="border-r bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand href="/" logo="https://fluxui.dev/img/demo/logo.png" name="{{ config('app.name') }}"
            class="px-2 dark:hidden" />
        <flux:brand href="/" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="{{ config('app.name') }}"
            class="hidden px-2 dark:flex" />

        <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="chart-bar" href="/panel">Panel</flux:navlist.item>
            <flux:navlist.item icon="inbox" badge="5" href="#">Messages</flux:navlist.item>
            <flux:navlist.item icon="document-text" href="#">Reports</flux:navlist.item>
            <flux:navlist.item icon="calendar" href="#">Calendar</flux:navlist.item>

            <flux:navlist.group expandable heading="Projects">
                <flux:navlist.item href="#">Project Alpha</flux:navlist.item>
                <flux:navlist.item href="#">Beta Launch</flux:navlist.item>
                <flux:navlist.item href="#">Guidelines</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
            aria-label="Toggle dark mode" />

        <!-- User dropdown -->
        <flux:dropdown position="top" align="end" class="hidden lg:flex">
            <flux:profile name="{{ Auth::user()->name }}" avatar="https://fluxui.dev/img/demo/user.png" />

            <flux:menu>
                <div class="px-2 py-1.5">
                    <flux:subheading class="!text-xs">
                        Signed in as
                    </flux:subheading>

                    <flux:heading>
                        {{ Auth::user()->email }}
                    </flux:heading>
                </div>

                <flux:menu.separator />

                <flux:menu.item icon="home" wire:navigate href="/">Home</flux:menu.item>
                <flux:menu.item icon="cog-6-tooth" wire:navigate href="{{ route('settings') }}">Settings
                </flux:menu.item>

                <flux:menu.separator />

                <flux:menu.item wire:click='logout' icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>

    <flux:header sticky class="!block bg-white lg:bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
        <flux:navbar class="w-full border-b lg:hidden border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <!-- User dropdown -->
            <flux:dropdown position="top" align="start">
                <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />

                <flux:menu>
                    <div class="px-2 py-1.5">
                        <flux:subheading class="!text-xs">
                            Signed in as
                        </flux:subheading>

                        <flux:heading>
                            {{ Auth::user()->email }}
                        </flux:heading>
                    </div>

                    <flux:menu.separator />

                    <flux:menu.item icon="home" wire:navigate href="/">Home</flux:menu.item>
                    <flux:menu.item icon="cog-6-tooth" wire:navigate href="{{ route('settings') }}">Settings
                    </flux:menu.item>

                    <flux:menu.separator />

                    <flux:menu.item wire:click='logout' icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </flux:navbar>

        <flux:navbar scrollable class="max-lg:items-center max-lg:justify-center max-lg:flex">
            <flux:navbar.item icon="chart-pie" href="#" current>Overview</flux:navbar.item>
            <flux:navbar.item icon="check-circle" badge="8" href="#">Tasks</flux:navbar.item>
            <flux:navbar.item icon="arrow-trending-up" href="#">Analytics</flux:navbar.item>
            <flux:navbar.item icon="cog-6-tooth" href="#">Settings</flux:navbar.item>
        </flux:navbar>
    </flux:header>

    <flux:main>
        {{ $slot }}
    </flux:main>
</body>
