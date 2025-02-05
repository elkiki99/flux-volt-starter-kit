<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<flux:footer container>
    <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
        <div class="flex flex-col items-center gap-4 md:flex-row max-md:gap-0">
            <flux:subheading class="text-center md:text-left">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved
            </flux:subheading>
        </div>

        <flux:subheading class="text-center md:text-right">
            <div class="flex gap-4">
                <flux:link wire:navigate href="/terms" class="text-center max-md:mb-1 !text-sm md:text-left">Terms
                    of
                    service
                </flux:link>
                <flux:link wire:navigate href="/privacy" class="text-center max-md:mb-1 !text-sm md:text-left">
                    Privacy
                    policy
                </flux:link>
            </div>
        </flux:subheading>
    </div>
</flux:footer>
