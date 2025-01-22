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

<flux:header container sticky
    class="flex items-center border-b bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:brand wire:navigate href="{{ route('welcome') }}" logo="https://fluxui.dev/img/demo/logo.png" name="Laravel"
        class="max-lg:hidden dark:hidden" />
    <flux:brand wire:navigate href="{{ route('welcome') }}" logo="https://fluxui.dev/img/demo/dark-mode-logo.png"
        name="Laravel" class="max-lg:!hidden hidden dark:flex" />

    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:navbar.item wire:navigate href="/" icon="home">Home</flux:navbar.item>
        <flux:navbar.item wire:navigate href="/blog" icon="book-open" badge="12">Blog</flux:navbar.item>
        <flux:navbar.item wire:navigate href="/about" icon="information-circle">About</flux:navbar.item>
        <flux:navbar.item wire:navigate href="/contact" icon="phone">Contact</flux:navbar.item>

        <flux:separator vertical variant="subtle" class="my-2" />

        <flux:dropdown class="max-lg:hidden">
            <flux:navbar.item icon-trailing="chevron-down">Resources</flux:navbar.item>

            <flux:navmenu>
                <flux:navmenu.item href="#">Marketing site</flux:navmenu.item>
                <flux:navmenu.item href="#">Android app</flux:navmenu.item>
                <flux:navmenu.item href="#">Brand guidelines</flux:navmenu.item>
            </flux:navmenu>
        </flux:dropdown>
    </flux:navbar>

    <flux:spacer />

    <flux:navbar class="hidden mr-1 lg:flex">
        <flux:button x-data x-on:click="" icon="magnifying-glass" variant="subtle" aria-label="Search" />

        <flux:separator vertical variant="subtle" class="my-2" />

        <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
            aria-label="Toggle dark mode" />
    </flux:navbar>

    @auth
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

                <flux:menu.item icon="user" wire:navigate href="{{ route('profile') }}">Dashboard</flux:menu.item>
                <flux:menu.item icon="cog-6-tooth" wire:navigate href="{{ route('settings') }}">Settings</flux:menu.item>

                <flux:menu.separator />

                <flux:menu.item wire:click='logout' icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    @else
        <flux:navbar class="-mb-px ">
            <flux:navbar.item wire:navigate href="{{ route('login') }}">Login</flux:navbar.item>
            <flux:navbar.item wire:navigate href="{{ route('register') }}">Register</flux:navbar.item>
        </flux:navbar>
    @endauth
</flux:header>
