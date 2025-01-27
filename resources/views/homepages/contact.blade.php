<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div class="space-y-3">
                <div class="text-center lg:text-start">
                    <p class="!py-0 !my-0 text-xs font-semibold text-gray-700 dark:hidden">CONTACT US</p>
                    <p class="!py-0 !my-0 text-xs font-semibold hidden text-gray-300 dark:flex">CONTACT US</p>
                </div>
                
                <flux:heading class="!text-5xl font-thin text-center lg:text-start">Let us help you reach <span
                        class="font-black">your goals</span></flux:heading>
                <!-- Desktop -->
                <flux:subheading size="lg" class="hidden lg:block">We're so glad to see you here! No matter
                    the size of your project, we're probably<br> ready to go! Fill out the form below to get in touch
                    with us.
                </flux:subheading>
                <!-- Mobile -->
                <flux:subheading size="lg" class="max-w-xl mx-auto text-center lg:hidden">We're so glad to see you
                    here! No matter
                    the size of your project, we're probably ready to go! Fill out the form below to get in touch
                    with us.
                </flux:subheading>
            </div>

            <div class="justify-center max-w-xl mx-auto space-y-6 lg:mx-0">
                <livewire:contact.contact-form />
            </div>
        </div>
    </flux:main>
</x-app-layout>
