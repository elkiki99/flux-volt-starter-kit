<x-app-layout>
    <flux:main container>
        <div class="flex flex-col gap-8 space-y-6 lg:flex-row">
            <div class="w-full space-y-3 lg:w-1/2">
                <div class="!text-center lg:!text-start">
                    <flux:badge icon="megaphone" color="yellow" size="sm" variant="pill" class="mb-3">Speak volumes</flux:badge>
                </div>

                <div class="space-y-6">

                    <flux:heading
                        class="!text-5xl md:!text-7xl max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                        Let's work <span
                            class="text-5xl font-black text-transparent md:text-7xl dark:from-yellow-500 dark:via-yellow-200 dark:to-yellow-600 bg-gradient-to-r from-yellow-600 via-yellow-300 to-yellow-500 bg-clip-text">
                            together</span></flux:heading>
                            
                    <div class="flex items-center justify-center gap-4 lg:justify-start">
                        <flux:subheading>
                            Want a simple website?
                        </flux:subheading>

                        <flux:link class="!text-sm" wire:navigate href="/pricing">Our pricing page</flux:link>
                    </div>
                </div>
            </div>

            <flux:card class="z-10 justify-center w-full max-w-xl mx-auto space-y-6 lg:mx-0 sm:p-10 !bg-transparent">
                <livewire:contact.contact-form />
            </flux:card>
        </div>
    </flux:main>
</x-app-layout>
