<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="max-lg:hidden lg:w-[220px] mr-10 my-12">
    <flux:navlist>
        <flux:navlist.item icon="squares-2x2" wire:navigate href="/dashboard">Dashboard</flux:navlist.item>
        <flux:navlist.item icon="user" wire:navigate href="/profile">Profile</flux:navlist.item>
        <flux:navlist.item icon="credit-card" href="#">Billing</flux:navlist.item>
        <flux:navlist.item icon="cog-6-tooth" wire:navigate href="/settings">Settings</flux:navlist.item>
    </flux:navlist>
</div>
