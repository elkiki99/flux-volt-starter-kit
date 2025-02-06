<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Real time update on profile picture when profile information update form is submitted
     */
    protected $listeners = ['profilePictureUpdated' => '$refresh'];

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<flux:header container sticky x-data="{ atTop: true }" @scroll.window="atTop = window.pageYOffset <= 25"
    class="z-20 flex items-center transition duration-300"
    x-bind:class="{
        'bg-transparent': atTop,
        'dark:bg-zinc-800 border-b dark:border-none bg-zinc-100 dark:border-zinc-700': !atTop,
    }">

    @if (!request()->routeIs('pricing') && !request()->routeIs('contact'))
        <flux:sidebar.toggle class="md:hidden" icon="bars-2" inset="left" />

        <flux:brand wire:navigate href="/" logo="{{ asset('app-logo-black.png') }}" name="{{ config('app.name') }}"
            class="max-md:hidden dark:hidden" />
        <flux:brand wire:navigate href="/" logo="{{ asset('app-logo-white.png') }}"
            name="{{ config('app.name') }}" class="max-md:!hidden hidden dark:flex" />
    @else
        <flux:brand wire:navigate href="/" logo="{{ asset('app-logo-black.png') }}"
            name="{{ config('app.name') }}" class="dark:hidden" />
        <flux:brand wire:navigate href="/" logo="{{ asset('app-logo-white.png') }}"
            name="{{ config('app.name') }}" class="hidden dark:flex" />
    @endif

    <flux:spacer />

    <flux:navbar class="-mb-1 max-md:hidden">
        @if (!request()->routeIs('pricing') && !request()->routeIs('contact'))
            <flux:navbar.item wire:navigate href="/about">About</flux:navbar.item>
            <flux:navbar.item wire:navigate href="/services">Services</flux:navbar.item>
            <flux:navbar.item wire:navigate href="/pricing">Pricing</flux:navbar.item>
            <flux:navbar.item wire:navigate href="/contact">Contact</flux:navbar.item>

            <flux:dropdown class="max-md:hidden">
                <flux:navbar.item icon-trailing="chevron-down">Resources</flux:navbar.item>

                <flux:navmenu>
                    <flux:navmenu.item href="/case-studies">Case studies</flux:navmenu.item>
                    <flux:navmenu.item href="/blog">Blog</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>

            <flux:separator vertical variant="subtle" class="my-2" />
        @endif

        <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
            aria-label="Toggle dark mode" />
    </flux:navbar>

    @auth
        <flux:navbar class="-mb-1">
            @if (request()->routeIs('pricing') || request()->routeIs('contact'))
                <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
                    aria-label="Toggle dark mode" class="md:hidden" />
            @endif

            <flux:dropdown position="top" align="start">
                <flux:profile avatar="{{ Auth::user()->profile_picture ?? 'https://fluxui.dev/img/demo/user.png' }}" />

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

                    @if (Auth::user()->is_admin)
                        <flux:menu.item icon="chart-bar" wire:navigate href="/panel">Panel</flux:menu.item>
                        <flux:menu.item icon="cog-6-tooth" wire:navigate href="/configuration">Configuration
                        </flux:menu.item>
                    @else
                        <flux:menu.item icon="user" wire:navigate href="/profile">Profile</flux:menu.item>
                        <flux:menu.item icon="cog-6-tooth" wire:navigate href="/settings">Settings</flux:menu.item>
                    @endif

                    <flux:menu.separator />

                    <flux:menu.item wire:click='logout' icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </flux:navbar>
    @else
        <flux:navbar class="-mb-1">
            @if (request()->routeIs('pricing') || request()->routeIs('contact'))
                <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
                    aria-label="Toggle dark mode" class="md:hidden" />
            @endif
            <flux:navbar.item wire:navigate href="/login">Login</flux:navbar.item>
        </flux:navbar>
    @endauth
</flux:header>
