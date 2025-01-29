<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <!-- Hero section -->
            <div class="space-y-3">
                <div class="!text-center lg:!text-start">
                    <p class="text-xs font-semibold text-gray-700 dark:hidden">+10 HAPPY CLIENTS</p>
                    <p class="hidden text-xs font-semibold text-gray-300 dark:block">+10 HAPPY CLIENTS</p>
                </div>

                <flux:heading
                    class="!text-4xl md:!text-5xl font-thin max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                    Lead the way in the digital crowd and<br class="hidden lg:block"> unlock your <span
                        class="text-4xl font-black text-transparent md:text-5xl dark:from-teal-500 dark:via-teal-300 dark:to-teal-600 bg-gradient-to-r from-teal-600 via-teal-300 to-teal-500 bg-clip-text">growth potential</span></flux:heading>
                <flux:subheading
                    class="max-w-xl mx-auto text-sm text-center md:text-base lg:text-start lg:mx-0 lg:max-w-full">Cut
                    through the noise and build a strong, lasting
                    connection with<br class="hidden lg:block">your ideal audience in this vast digital world.<br
                        class="hidden lg:block">We handle the heavy
                    lifting.
                </flux:subheading>
            </div>

            <div class="flex items-center justify-center gap-4 lg:justify-start">
                <flux:button wire:navigate href="/contact" icon-trailing="arrow-up-right">Contact us</flux:button>
                <flux:button variant="primary" wire:navigate href="/pricing" icon-trailing="arrow-up-right">Get started</flux:button>
            </div>
        </div>
    </flux:main>
</x-app-layout>
