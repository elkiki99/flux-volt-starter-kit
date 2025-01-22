<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:navlist>
    <flux:navlist.item icon="squares-2x2" wire:navigate href="/dashboard">Dashboard</flux:navlist.item>
    <flux:navlist.item icon="user" wire:navigate href="/profile">Profile</flux:navlist.item>
    <flux:navlist.item icon="credit-card" href="#">Billing</flux:navlist.item>
    <flux:navlist.item icon="cog-6-tooth" wire:navigate href="/settings">Settings</flux:navlist.item>
</flux:navlist>
