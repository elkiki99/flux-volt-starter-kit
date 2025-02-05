<x-app-layout>
    <flux:main container>
        <section class="flex flex-col gap-8 space-y-6 lg:flex-row">
            <div class="w-full space-y-3 lg:w-1/2">
                <div class="!text-center lg:!text-start">
                    <flux:badge icon="megaphone" color="amber" size="sm" variant="pill" class="mb-3">Speak volumes</flux:badge>
                </div>

                <div class="space-y-6">
                    <flux:heading level="1"
                        class="!text-5xl md:!text-7xl font-black max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                        Let's work <span
                            class="text-5xl font-black text-transparent md:text-7xl dark:from-amber-500 dark:via-amber-200 dark:to-amber-600 bg-gradient-to-r from-amber-600 via-amber-300 to-amber-500 bg-clip-text">
                            together</span></flux:heading>
                            
                    <div class="flex items-center justify-center gap-2 lg:justify-start">
                        <flux:subheading level="2">
                            Want a simple website?
                        </flux:subheading>

                        <flux:link class="!text-sm" wire:navigate href="/pricing">Our pricing page</flux:link>
                    </div>
                </div>
            </div>

            <flux:card class="z-10 justify-center w-full max-w-xl mx-auto space-y-6 lg:mx-0 sm:p-10 !bg-transparent">
                <livewire:contact.contact-form />
            </flux:card>
        </section>
    </flux:main>
</x-app-layout>
