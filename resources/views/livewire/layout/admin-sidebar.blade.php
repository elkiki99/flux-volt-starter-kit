<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div>
    <flux:sidebar sticky stashable
        class="h-screen border-r bg-zinc-100 dark:bg-zinc-800 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand href="/" logo="{{ asset('app-logo-black.png') }}" name="{{ config('app.name') }}"
            class="px-2 dark:hidden" />
        <flux:brand href="/" logo="{{ asset('app-logo-white.png') }}" name="{{ config('app.name') }}"
            class="hidden px-2 dark:flex" />

        <flux:navlist variant="outline">
            <flux:navlist.item wire:navigate icon="chart-bar" href="/panel">Panel</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="inbox" href="/messages">Messages</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="calendar" href="/calendar">Calendar</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="megaphone" href="/marketing">Marketing</flux:navlist.item>

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
            <flux:profile name="{{ Auth::user()->name }}" avatar="{{ Auth::user()->profile_picture ?? 'https://fluxui.dev/img/demo/user.png' }}" />

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

                <flux:menu.item wire:navigate icon="home" href="/">Home</flux:menu.item>
                <flux:menu.item wire:navigate icon="cog-6-tooth" href="/configuration">Configuration</flux:menu.item>

                <flux:menu.separator />

                <flux:menu.item wire:click='logout' icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>
</div>
