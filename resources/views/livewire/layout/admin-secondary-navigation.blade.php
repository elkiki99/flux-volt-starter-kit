<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:header
    class="w-full px-6 bg-white border-b lg:bg-zinc-50 dark:bg-zinc-900 lg:hidden border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

    <flux:spacer />

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

            @if (Auth::user()->is_admin)
                <flux:menu.item icon="home" wire:navigate href="/">Home</flux:menu.item>
            @else
                <flux:menu.item icon="user" wire:navigate href="{{ route('profile') }}">Dashboard</flux:menu.item>
            @endif
            <flux:menu.item icon="cog-6-tooth" wire:navigate href="{{ route('settings') }}">Settings</flux:menu.item>

            <flux:menu.separator />

            <flux:menu.item wire:click='logout' icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</flux:header>
