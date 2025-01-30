<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div class="space-y-3">
                <div class="!text-center lg:!text-start">
                    <flux:badge icon="megaphone" color="yellow" size="sm" variant="pill">Speak volumes</flux:badge>
                </div>

                <flux:heading
                    class="!text-5xl md:!text-7xl max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                    Get in touch. Let's make <br class="hidden lg:block">an <span
                        class="text-5xl font-black text-transparent md:text-7xl dark:from-yellow-500 dark:via-yellow-200 dark:to-yellow-600 bg-gradient-to-r from-yellow-600 via-yellow-300 to-yellow-500 bg-clip-text">
                         excelent product</span></flux:heading>
                <flux:subheading
                    class="max-w-xl mx-auto text-sm text-center md:text-base lg:text-start lg:mx-0 lg:max-w-full">We're
                    so glad to see you here! No matter the size of your project, we're probably<br
                        class="hidden lg:block"> ready to go! Fill out the form
                    below to get in touch
                    with us.
                </flux:subheading>
            </div>

            <div class="justify-center max-w-xl mx-auto space-y-6 lg:mx-0">
                <livewire:contact.contact-form />
            </div>
        </div>
    </flux:main>
</x-app-layout>
