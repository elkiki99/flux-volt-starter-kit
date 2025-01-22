<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <flux:sidebar stashable sticky
        class="border-r lg:hidden bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Laravel" class="px-2 dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Laravel"
            class="hidden px-2 dark:flex" />

        <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

        <flux:navlist variant="outline">
            <flux:navlist.item wire:navigate icon="home" href="/">Home</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="book-open" badge="12" href="/blog">Blog</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="information-circle" href="/about">About</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="phone" href="/contact">Contact</flux:navlist.item>

            <flux:navlist.group expandable heading="Resources">
                <flux:navlist.item href="#">Marketing site</flux:navlist.item>
                <flux:navlist.item href="#">Android app</flux:navlist.item>
                <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
            aria-label="Toggle dark mode" />
    </flux:sidebar>
</div>
