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
    <flux:header sticky container class="border-b bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:brand wire:navigate href="{{ route('welcome') }}" logo="https://fluxui.dev/img/demo/logo.png" name="Laravel"
            class="max-lg:hidden dark:hidden" />
        <flux:brand wire:navigate href="{{ route('welcome') }}" logo="https://fluxui.dev/img/demo/dark-mode-logo.png"
            name="Laravel" class="max-lg:!hidden hidden dark:flex" />

        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item href="#" icon="home">Home</flux:navbar.item>
            <flux:navbar.item href="#" icon="inbox" badge="12">Inbox</flux:navbar.item>
            <flux:navbar.item href="#" icon="document-text">Documents</flux:navbar.item>

            <flux:separator vertical variant="subtle" class="my-2" />

            <flux:dropdown class="max-lg:hidden">
                <flux:navbar.item icon-trailing="chevron-down">Favorites</flux:navbar.item>

                <flux:navmenu>
                    <flux:navmenu.item href="#">Marketing site</flux:navmenu.item>
                    <flux:navmenu.item href="#">Android app</flux:navmenu.item>
                    <flux:navmenu.item href="#">Brand guidelines</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        </flux:navbar>

        <flux:spacer />

        <flux:navbar class="mr-1">
            <flux:navbar.item href="#" icon="magnifying-glass" label="Search" />
            <flux:navbar.item class="max-lg:hidden" href="#" icon="cog-6-tooth" label="Settings" />

            <flux:separator vertical variant="subtle" class="my-2" />

            <flux:navbar.item class="max-lg:hidden" href="#" icon="information-circle" label="Help" />
            <flux:navbar.item x-on:click="$flux.dark = ! $flux.dark" icon="moon" />
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

    <flux:sidebar stashable sticky
        class="border-r lg:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">

        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Laravel"
            class="px-2 dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Laravel"
            class="hidden px-2 dark:flex" />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="home" href="#" current>Home</flux:navlist.item>
            <flux:navlist.item icon="inbox" badge="12" href="#">Inbox</flux:navlist.item>
            <flux:navlist.item icon="document-text" href="#">Documents</flux:navlist.item>

            <flux:navlist.group expandable heading="Favorites" class="max-lg:hidden">
                <flux:navlist.item href="#">Marketing site</flux:navlist.item>
                <flux:navlist.item href="#">Android app</flux:navlist.item>
                <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
            <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>
</div>
