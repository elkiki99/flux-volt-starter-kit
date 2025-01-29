<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:navbar x-data="{ atTop: true }" @scroll.window="atTop = window.pageYOffset <= 25"
    x-bind:class="{
        'bg-transparent border-b dark:border-zinc-700 border-zinc-200 lg:border-none': atTop,
        'border-b dark:border-none border-zinc-200 lg:bg-zinc-100 dark:lg:bg-zinc-800': !atTop,
    }"
    class="z-50 px-2 transition duration-300 max-lg:items-center max-lg:justify-center max-lg:flex" scrollable>
    <flux:navbar.item wire:navigate icon="globe-alt" href="/seo">SEO</flux:navbar.item>
    <flux:navbar.item wire:navigate icon="check-circle" href="/tasks">Tasks</flux:navbar.item>
    <flux:navbar.item wire:navigate icon="arrow-trending-up" href="/analytics">Analytics</flux:navbar.item>
    <flux:navbar.item wire:navigate icon="cog-6-tooth" href="/configuration">Configuration</flux:navbar.item>
</flux:navbar>
