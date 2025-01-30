<x-app-layout>
    <flux:main container class="">
        <!-- Hero section -->
        <section class="space-y-6 min-h-[85vh]">
            <div class="space-y-3">
                <div class="!text-center lg:!text-start">
                    <flux:badge icon="rocket-launch" color="yellow" size="sm" variant="pill">Enterprise partner
                    </flux:badge>
                </div>

                <flux:heading
                    class="!text-5xl md:!text-7xl font-black max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                    Lead the way in the digital <br class="hidden lg:block">crowd and unlock your <br
                        class="hidden lg:block">full <span
                        class="!text-5xl font-black text-transparent md:!text-7xl dark:from-yellow-500 dark:via-yellow-200 dark:to-yellow-600 bg-gradient-to-r from-yellow-600 via-yellow-300 to-yellow-500 bg-clip-text">growth
                        potential</span></flux:heading>
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
                <flux:button variant="primary" wire:navigate href="/pricing" icon-trailing="arrow-up-right">Get started
                </flux:button>
            </div>
        </section>

        <!-- More of us (services, about us, case studies) -->
        <section class="min-h-screen space-y-6 py-6">
            <flux:heading class="font-bold py-6 !text-4xl text-center lg:!text-5xl">All in one team for <br>personalized
                services
            </flux:heading>

            <!-- Services -->
            <flux:card class="lg:flex lg:!pt-10 lg:!pb-10 !pl-10 lg:!pr-0 !pt-0 !pr-10 !bg-transparent">
                <article class="flex lg:flex-row flex-col-reverse justify-center gap-8">
                    <div class="w-full flex flex-col lg:w-1/2 space-y-6">
                        <div class="gap-2">
                            <flux:heading class="!text-3xl">Web design</flux:heading>
                            <flux:subheading class="max-w-xl">75% of users base a company's credibility on it's
                                website design. Make it stand out - entrust your website design to a specialized digital
                                agency.</flux:subheading>
                        </div>

                        <div class="flex flex-grow flex-col gap-2 space-y-6 py-6">
                            <div class="space-y-3">
                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle />
                                    <flux:heading class="!text-xl">UX/UI Design</flux:heading>
                                </div>
                                <flux:subheading class="max-w- ml-[2rem]">We focus on the user experience and user
                                    interface
                                    for maximum engagement, while still maintaining optimized functionality.
                                </flux:subheading>
                            </div>

                            <div class="space-y-3">
                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle />
                                    <flux:heading class="!text-xl">Solid integrations</flux:heading>
                                </div>
                                <flux:subheading class="max-w-2xl ml-[2rem]">We ensure seamless integration with popular
                                    tools and
                                    platforms, ensuring maximum efficiency for your bussiness.</flux:subheading>
                            </div>
                        </div>

                        <flux:button class="!w-auto inline-block text-start" icon-trailing="arrow-up-right"
                            wire:navigate as="link" variant="ghost" href="/services" class="!w-auto text-start">
                            What we offer</flux:button>
                    </div>

                    <flux:card
                        class="!bg-transparent !pt-0 lg:!pt-1 !pb-1 !pl-1 !pr-1 lg:!pr-0 w-full lg:w-1/2 lg:!rounded-l-lg rounded-t-none rounded-b-lg lg:!rounded-r-none">
                        <img class="lg:rounded-l-lg lg:rounded-r-none rounded-b-lg h-full object-cover" loading="lazy"
                            src="{{ asset('header.jpg') }}" alt="Hero image">
                    </flux:card>
                </article>
            </flux:card>

            <!-- About us -->
            <flux:card class="lg:flex lg:!pt-10 lg:!pb-10 !pl-10 lg:!pl-0 !pt-0 !pr-10 !bg-transparent">
                <article class="flex flex-col-reverse lg:flex-row-reverse justify-center gap-8">
                    <div class="w-full flex flex-col lg:w-1/2 space-y-6">
                        <div class="gap-2">
                            <flux:heading class="!text-3xl">Our principles</flux:heading>
                            <flux:subheading class="max-w-xl">We believe in handcraftsmanship and attention to detail.
                                We are a group of
                                dedicated individuals trying to build awesome stuff, and we try to strike for
                                uniqueness.</flux:subheading>
                        </div>

                        <div class="flex flex-grow flex-col gap-2 space-y-6 py-6">
                            <div class="space-y-3">
                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle />
                                    <flux:heading class="!text-xl">UX/UI Design</flux:heading>
                                </div>
                                <flux:subheading class="max-w- ml-[2rem]">We focus on the user experience and user
                                    interface
                                    for maximum engagement, while still maintaining optimized functionality.
                                </flux:subheading>
                            </div>

                            <div class="space-y-3">
                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle />
                                    <flux:heading class="!text-xl">Solid integrations</flux:heading>
                                </div>
                                <flux:subheading class="max-w-2xl ml-[2rem]">We ensure seamless integration with popular
                                    tools and
                                    platforms, ensuring maximum efficiency for your bussiness.</flux:subheading>
                            </div>
                        </div>

                        <flux:button class="!w-auto inline-block text-start" icon-trailing="arrow-up-right"
                            wire:navigate as="link" variant="ghost" href="/about" class="!w-auto text-start">
                            Who we are</flux:button>
                    </div>

                    <flux:card
                        class="!bg-transparent !pt-0 lg:!pt-1 !pb-1 !pl-1 !pr-1 lg:!pl-0 w-full lg:w-1/2 lg:!rounded-r-lg rounded-t-none rounded-b-lg lg:!rounded-l-none">
                        <img class="lg:rounded-r-lg rounded-b-lg lg:rounded-br-lg lg:rounded-l-none h-full object-cover"
                            loading="lazy" src="{{ asset('2.jpg') }}" alt="Hero image">
                    </flux:card>
                </article>
            </flux:card>

            <!-- Case studies -->
            <flux:card class="lg:flex lg:!pt-10 lg:!pb-10 !pl-10 lg:!pr-0 !pt-0 !pr-10 !bg-transparent">
                <article class="flex lg:flex-row flex-col-reverse justify-center gap-8">
                    <div class="w-full flex flex-col lg:w-1/2 space-y-6">
                        <div class="gap-2">
                            <flux:heading class="!text-3xl">Web design</flux:heading>
                            <flux:subheading class="max-w-xl">75% of users base a company's credibility on it's
                                website design. Make it stand out - entrust your website design to a specialized digital
                                agency</flux:subheading>
                        </div>

                        <div class="flex flex-grow flex-col gap-2 space-y-6 py-6">
                            <div class="space-y-3">
                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle />
                                    <flux:heading class="!text-xl">UX/UI Design</flux:heading>
                                </div>
                                <flux:subheading class="max-w-2xl ml-[2rem]">We focus on the user experience and user
                                    interface
                                    for maximum engagement, while still maintaining optimized functionality.
                                </flux:subheading>
                            </div>

                            <div class="space-y-3">
                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle />
                                    <flux:heading class="!text-xl">Solid integrations</flux:heading>
                                </div>
                                <flux:subheading class="max-w- ml-[2rem]">We ensure seamless integration with popular
                                    tools and
                                    platforms, ensuring maximum efficiency for your bussiness.</flux:subheading>
                            </div>
                        </div>

                        <flux:button class="!w-auto inline-block text-start" icon-trailing="arrow-up-right"
                            wire:navigate as="link" variant="ghost" href="/" class="!w-auto text-start">
                            What we do best</flux:button>
                    </div>

                    <flux:card
                        class="!bg-transparent !pt-0 lg:!pt-1 !pb-1 !pl-1 !pr-1 lg:!pr-0 w-full lg:w-1/2 lg:!rounded-l-lg rounded-t-none rounded-b-lg lg:!rounded-r-none">
                        <img class="lg:rounded-l-lg lg:rounded-r-none rounded-b-lg h-full object-cover" loading="lazy"
                            src="{{ asset('3.jpg') }}" alt="Hero image">
                    </flux:card>
                </article>
            </flux:card>
        </section>

        <!-- What set us apart -->
        <section class=" space-y-6 py-6">
            <div class="text-center py-6">
                <flux:heading class="font-bold !text-4xl lg:!text-5xl">There are thousands of <br>agencies, so why
                    choose us?
                </flux:heading>
                <flux:subheading>From day one, focused on our core values:
                </flux:subheading>
            </div>

            <ul class="grid grid-cols-2 lg:grid-cols-3 gap-4 gap-4 max-w-4xl mx-auto">
                <flux:card class="!bg-transparent !p-8">
                    <li class="flex flex-col gap-2 items-center">
                        <flux:icon.cursor-arrow-ripple class="text-amber-400 size-10 justify-center stroke-[1]" />
                        <flux:heading class="text-center !text-xl !font-thin">Human-centered design</flux:heading>
                    </li>
                </flux:card>
                <flux:card class="!bg-transparent !p-8">
                    <li class="flex flex-col gap-2 items-center">
                        <flux:icon.cube-transparent class="text-amber-400 size-10 justify-center stroke-[1]" />
                        <flux:heading class="text-center !text-xl !font-thin">Simplicity with depth</flux:heading>
                    </li>
                </flux:card>
                <flux:card class="!bg-transparent !p-8">
                    <li class="flex flex-col gap-2 items-center">
                        <flux:icon.squares-plus class="text-amber-400 size-10 justify-center stroke-[1]" />
                        <flux:heading class="text-center !text-xl !font-thin">Timeless aesthetics</flux:heading>
                    </li>
                </flux:card>
                <flux:card class="!bg-transparent !p-8">
                    <li class="flex flex-col gap-2 items-center">
                        <flux:icon.arrow-trending-up class="text-amber-400 size-10 justify-center stroke-[1]" />
                        <flux:heading class="text-center !text-xl !font-thin">Performance as a standard</flux:heading>
                    </li>
                </flux:card>
                <flux:card class="!bg-transparent !p-8">
                    <li class="flex flex-col gap-2 items-center">
                        <flux:icon.lock-closed class="text-amber-400 size-10 justify-center stroke-[1]" />
                        <flux:heading class="text-center !text-xl !font-thin">Ethical & transparent practices
                        </flux:heading>
                    </li>
                </flux:card>
                <flux:card class="!bg-transparent !p-8">
                    <li class="flex flex-col gap-2 items-center">
                        <flux:icon.signal class="text-amber-400 size-10 justify-center stroke-[1]" />
                        <flux:heading class="text-center !text-xl !font-thin">Relentless curiosity</flux:heading>
                    </li>
                </flux:card>
            </ul>
        </section>

        <!-- Our blog -->
        <section class="min-h-screen space-y-6 py-6">
            <flux:heading class="font-bold text-center py-6 !text-4xl lg:!text-5xl">Check out our most popular resources
            </flux:heading>

            <div class="flex gap-4 items-center">
                <flux:card class="relative !p-0 w-1/3 h-[80vh]">
                    <a href="#">
                        <img class="h-full rounded-lg object-cover w-full" src="{{ asset('4.jpg') }}">
                        <div
                            class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/90 to-transparent rounded-b-lg">
                        </div>
                        <h2 class="absolute bottom-4 left-4 text-white text-3xl font-bold">Web data & conversion</h2>
                    </a>
                </flux:card>

                <flux:card class="relative !p-0 w-1/3 h-[80vh]">
                    <a href="#">
                        <img class="h-full rounded-lg object-cover w-full" src="{{ asset('5.jpg') }}">
                        <div
                            class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/90 to-transparent rounded-b-lg">
                        </div>
                        <h2 class="absolute bottom-4 left-4 text-white text-3xl font-bold">On page SEO optimization
                        </h2>
                    </a>
                </flux:card>

                <flux:card class="relative !p-0 w-1/3 h-[80vh]">
                    <a href="#">
                        <img class="h-full rounded-lg object-cover w-full" src="{{ asset('6.jpg') }}">
                        <div
                            class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black/90 to-transparent rounded-b-lg">
                        </div>
                        <h2 class="absolute bottom-4 left-4 text-white text-3xl font-bold">Performance as a standard
                        </h2>
                    </a>
                </flux:card>
            </div>
        </section>
    </flux:main>
</x-app-layout>
