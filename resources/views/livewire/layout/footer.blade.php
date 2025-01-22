<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<header class="flex flex-col items-center justify-between px-12 py-6 mx-auto md:flex-row">
    <div class="flex flex-col items-center gap-4 md:flex-row max-md:gap-0">
        <flux:subheading class="my-4 text-center md:text-left">
            {{ config('app.name') }} &copy; {{ date('Y') }}
        </flux:subheading>

        <flux:link wire:navigate href="/terms" class="text-center max-md:mb-1 !text-sm md:text-left">Terms of service</flux:link>
    </div>

    <flux:subheading class="my-4 text-center md:text-right">
        Built with ❤️ with Flux UI components
    </flux:subheading>
</header>