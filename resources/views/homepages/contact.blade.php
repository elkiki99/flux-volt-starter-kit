<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div class="space-y-3">
                <div class="!text-center lg:!text-start">
                    <p class="text-xs font-semibold text-gray-700 dark:hidden">CONTACT</p>
                    <p class="hidden text-xs font-semibold text-gray-300 dark:block">CONTACT</p>
                </div>

                <flux:heading
                    class="!text-4xl md:!text-5xl font-thin max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                    Collaborate with us. Let's<span class="font-black text-teal-600 dark:text-teal-400"> fly high</span></flux:heading>
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
