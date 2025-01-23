<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:navbar class="border-b border-zinc-200 dark:border-zinc-700 max-lg:items-center max-lg:justify-center max-lg:flex" scrollable> 
    {{-- <flux:navbar scrollable class="max-lg:items-center max-lg:justify-center max-lg:flex"> --}}
        <flux:navbar.item icon="chart-pie" href="#" current>Overview</flux:navbar.item>
        <flux:navbar.item icon="check-circle" badge="8" href="#">Tasks</flux:navbar.item>
        <flux:navbar.item icon="arrow-trending-up" href="#">Analytics</flux:navbar.item>
        <flux:navbar.item icon="cog-6-tooth" href="#">Settings</flux:navbar.item>
    </flux:navbar>