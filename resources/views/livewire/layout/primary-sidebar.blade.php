<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <flux:sidebar stashable sticky
        class="border-r md:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="md:hidden" icon="x-mark" />

        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Flux Starter Kit" class="px-2 dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Flux Starter Kit"
            class="hidden px-2 dark:flex" />

        <flux:navlist variant="outline">
            <flux:navlist.item wire:navigate icon="book-open" href="/about">About</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="light-bulb" href="/services">Services</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="currency-dollar" href="/pricing">Pricing</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="phone" href="/contact">Contact</flux:navlist.item>

            <flux:navlist.group expandable heading="More">
                <flux:navlist.item href="#">Marketing site</flux:navlist.item>
                <flux:navlist.item href="#">Case studies</flux:navlist.item>
                <flux:navlist.item href="#">FAQs</flux:navlist.item>
                <flux:navlist.item href="#">Blog</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
            aria-label="Toggle dark mode" />
    </flux:sidebar>
</div>
