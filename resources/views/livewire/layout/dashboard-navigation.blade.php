<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:navbar class="flex justify-center bg-white border-b lg:hidden dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
    <flux:navbar.item class="hidden sm:flex" icon="squares-2x2" wire:navigate href="/dashboard">Dashboard</flux:navbar.item>
    <flux:navbar.item class="hidden sm:flex" icon="user" wire:navigate href="/profile">Profile</flux:navbar.item>
    <flux:navbar.item class="hidden sm:flex" icon="credit-card" wire:navigate href="/billing">Billing</flux:navbar.item>
    <flux:navbar.item class="hidden sm:flex" icon="cog-6-tooth" wire:navigate href="/settings">Settings</flux:navbar.item>
    
    <flux:navbar.item class="flex sm:hidden" wire:navigate href="/dashboard">Dashboard</flux:navbar.item>
    <flux:navbar.item class="flex sm:hidden" wire:navigate href="/profile">Profile</flux:navbar.item>
    <flux:navbar.item class="flex sm:hidden" wire:navigate href="/billing">Billing</flux:navbar.item>
    <flux:navbar.item class="flex sm:hidden" wire:navigate href="/settings">Settings</flux:navbar.item>
</flux:navbar>
