<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:navbar x-data="{ atTop: true }" @scroll.window="atTop = window.pageYOffset <= 25"
    x-bind:class="{
        'bg-transparent border-b dark:border-zinc-700 border-zinc-200 lg:border-none': atTop,
        'border-b lg:dark:border-none dark:border-zinc-700 border-zinc-200 lg:bg-zinc-100 dark:lg:bg-zinc-800': !atTop,
    }"
    class="z-50 px-2  transition-[background-color] duration-300 max-lg:items-center max-lg:justify-center max-lg:flex">
    <flux:navbar.item wire:navigate class="hidden sm:flex" icon="globe-alt" href="/seo">SEO</flux:navbar.item>
    <flux:navbar.item wire:navigate class="hidden sm:flex" icon="check-circle" href="/tasks">Tasks</flux:navbar.item>
    <flux:navbar.item wire:navigate class="hidden sm:flex" icon="arrow-trending-up" href="/analytics">Analytics</flux:navbar.item>
    <flux:navbar.item wire:navigate class="hidden sm:flex" icon="cog-6-tooth" href="/configuration">Configuration</flux:navbar.item>

    <flux:navbar.item wire:navigate class="flex sm:hidden" href="/seo">SEO</flux:navbar.item>
    <flux:navbar.item wire:navigate class="flex sm:hidden" href="/tasks">Tasks</flux:navbar.item>
    <flux:navbar.item wire:navigate class="flex sm:hidden" href="/analytics">Analytics</flux:navbar.item>
    <flux:navbar.item wire:navigate class="flex sm:hidden" href="/configuration">Configuration</flux:navbar.item>
</flux:navbar>
