<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:navbar class="flex justify-between -mb-px">
    <div class="flex max-md:hidden">
        <flux:navbar.item badge="24" href="#">All</flux:navbar.item>
        <flux:navbar.item wire:navigate href="#">AI</flux:navbar.item>
        <flux:navbar.item wire:navigate href="#">Design</flux:navbar.item>
        <flux:navbar.item wire:navigate href="#">Development</flux:navbar.item>
        <flux:navbar.item wire:navigate href="#">SEO</flux:navbar.item>
        <flux:navbar.item wire:navigate href="#">Analytics</flux:navbar.item>
    </div>

    <flux:dropdown class="flex md:hidden">
        <flux:navbar.item icon="bars-2"></flux:navbar.item>

        <flux:navmenu>
            <flux:navmenu.item wire:navigate href="#">All</flux:navmenu.item>
            <flux:navmenu.item wire:navigate href="#">AI</flux:navmenu.item>
            <flux:navmenu.item wire:navigate href="#">Design</flux:navmenu.item>
            <flux:navmenu.item wire:navigate href="#">Development</flux:navmenu.item>
            <flux:navmenu.item wire:navigate href="#">SEO</flux:navmenu.item>
            <flux:navmenu.item wire:navigate href="#">Analytics</flux:navmenu.item>
        </flux:navmenu>
    </flux:dropdown>

    <div class="flex">
        <flux:input class="ml-auto" variant="filled" placeholder="Search..." icon="magnifying-glass" />
    </div>
</flux:navbar>
