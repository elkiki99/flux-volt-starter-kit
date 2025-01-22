<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="max-lg:hidden lg:w-[220px] pb-4 mr-10">
    <flux:navlist>
        <flux:navlist.item icon="squares-2x2" wire:navigate href="{{ route('dashboard') }}">Dashboard</flux:navlist.item>
        <flux:navlist.item icon="user" wire:navigate href="{{ route('profile') }}">Profile</flux:navlist.item>
        <flux:navlist.item icon="queue-list" href="#">Catalog</flux:navlist.item>
        <flux:navlist.item icon="currency-dollar" href="#">Payments</flux:navlist.item>
        <flux:navlist.item icon="users" href="#">Customers</flux:navlist.item>
        <flux:navlist.item icon="banknotes" href="#">Billing</flux:navlist.item>
        <flux:navlist.item icon="chat-bubble-oval-left" href="#">Quotes</flux:navlist.item>
        <flux:navlist.item icon="cog-6-tooth" wire:navigate href="{{ route('settings') }}">Settings</flux:navlist.item>
    </flux:navlist>
</div>