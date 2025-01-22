<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="container mx-auto flex flex-col md:flex-row items-center justify-between py-6 px-6">
    <div class="flex flex-col md:flex-row max-md:gap-0 gap-4 items-center">
        <flux:subheading class="my-4 text-center md:text-left">
            {{ config('app.name') }} &copy; {{ date('Y') }}
        </flux:subheading>

        <flux:link href="#" class="text-center max-md:mb-1 !text-sm md:text-left">Terms of service</flux:link>
    </div>

    <flux:subheading class="my-4 text-center md:text-right">
        Built with ❤️ with Flux UI components
    </flux:subheading>
</div>