<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:navbar class="z-50 border-b px-2 border-zinc-200 bg-zinc-50 dark:bg-zinc-900 dark:border-zinc-700 max-lg:items-center max-lg:justify-center max-lg:flex"
    scrollable>
    <flux:navbar.item wire:navigate icon="chart-pie" href="/overview">Overview</flux:navbar.item>
    <flux:navbar.item wire:navigate icon="check-circle" badge="8" href="/tasks">Tasks</flux:navbar.item>
    <flux:navbar.item wire:navigate icon="arrow-trending-up" href="/analytics">Analytics</flux:navbar.item>
    <flux:navbar.item wire:navigate icon="cog-6-tooth" href="/configuration">Configuration</flux:navbar.item>
</flux:navbar>
