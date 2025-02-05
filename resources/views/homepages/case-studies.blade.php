<x-app-layout>
    <flux:main container>
        <!-- Hero section -->
        <section class="min-h-[85vh] flex flex-col space-y-6">
            <div class="flex-grow"></div>

            <div class="mt-auto space-y-3">
                <div class="!text-center lg:!text-start">
                    <flux:badge icon="rocket-launch" color="amber" size="sm" variant="pill">Pro collaborator
                    </flux:badge>
                </div>

                <flux:heading level="1"
                    class="!text-5xl md:!text-7xl font-black max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                    We build websites that <br class="hidden lg:block">drive bussiness <span
                        class="!text-5xl font-black text-transparent md:!text-7xl dark:from-amber-500 dark:via-amber-200 dark:to-amber-600 bg-gradient-to-r from-amber-600 via-amber-300 to-amber-500 bg-clip-text">success</span>
                </flux:heading>
                <flux:subheading level="2"
                    class="max-w-xl mx-auto text-sm text-center md:text-base lg:text-start lg:mx-0 lg:max-w-full">From
                    strategy to technical execution, explore our case studies<br class="hidden lg:block"> to discover
                    the impact of our agency.
                </flux:subheading>
            </div>

            <div class="flex items-center justify-center gap-4 lg:justify-start">
                <flux:button wire:navigate href="/about" icon-trailing="arrow-up-right">About us</flux:button>
                <flux:button variant="primary" wire:navigate href="/pricing" icon-trailing="arrow-up-right">Get started
                </flux:button>
            </div>

            <div class="flex-grow"></div>

            <!-- Pines UI Marquee -->
            <div class="!my-6">
                <livewire:components.marquee />
            </div>
        </section>

        <!-- Case studies -->
        <section class="min-h-screen py-6 space-y-6">
            <flux:heading level="2" class="font-bold py-6 text-center !text-4xl lg:!text-5xl">We've helped some
                big names
                <br>achieve their goals efficiently
            </flux:heading>

            <div class="flex flex-col py-6 space-y-6">
                <article>
                    <flux:card
                        class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 !border-transparent hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">

                        <div class="block gap-4 lg:flex">
                            <div class="w-full lg:w-1/2">
                                <img class="object-cover md:w-full rounded-lg md:h-[60vh]"
                                    src="{{ asset('case_studie-1.jpg') }}">
                            </div>

                            <div
                                class="lg:w-1/2 w-full flex flex-col md:flex-row-reverse lg:flex-col justify-start min-h-[60vh] gap-4">
                                <div
                                    class="flex flex-row w-full gap-4 pt-4 md:flex-col md:w-1/2 lg:flex lg:flex-row lg:w-full lg:space-y-0 lg:pt-0">
                                    <img class="object-cover rounded-lg h-[15vh] sm:h-[25vh] w-1/2 md:w-full lg:w-1/2"
                                        src="{{ asset('case_studie-13.webp') }}">
                                    <img class="object-cover rounded-lg h-[15vh] sm:h-[25vh] w-1/2 md:w-full lg:w-1/2"
                                        src="{{ asset('case_studie-12.webp') }}">
                                </div>
                                <div class="flex flex-col flex-1 w-full gap-4 md:py-4 md:w-1/2 lg:w-full lg:p-0">
                                    <div class="items-start flex-1 text-start">
                                        <flux:heading level="3" class="!text-xl !px-0">
                                            Technology-based website that resulted in a 50% increase in sales
                                        </flux:heading>
                                    </div>
                                    <div class="flex items-end gap-2">
                                        <flux:heading class="!text-7xl md:!text-8xl !px-0">40x</flux:heading>
                                        <flux:subheading class="!px-0 pb-4">traffic SEO</flux:subheading>
                                    </div>
                                    <flux:separator class="hidden md:block" />
                                </div>
                            </div>
                        </div>
                    </flux:card>
                </article>

                <flux:separator class="!mb-6 !mt-12" />

                <article>
                    <flux:card
                        class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 !border-transparent hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">

                        <div class="block gap-4 lg:flex">
                            <div class="w-full lg:w-1/2">
                                <img class="object-cover w-full rounded-lg md:h-[60vh]"
                                    src="{{ asset('case_studie-5.webp') }}">
                            </div>

                            <div
                                class="lg:w-1/2 w-full flex flex-col md:flex-row-reverse lg:flex-col justify-start min-h-[60vh] gap-4">
                                <div
                                    class="flex flex-row w-full gap-4 pt-4 md:flex-col md:w-1/2 lg:flex lg:flex-row lg:w-full lg:space-y-0 lg:pt-0">
                                    <img class="object-cover rounded-lg h-[15vh] sm:h-[25vh] w-1/2 md:w-full lg:w-1/2"
                                        src="{{ asset('case_studie-4.webp') }}">
                                    <img class="object-cover rounded-lg h-[15vh] sm:h-[25vh] w-1/2 md:w-full lg:w-1/2"
                                        src="{{ asset('case_studie-6.webp') }}">
                                </div>
                                <div class="flex flex-col flex-1 w-full gap-4 md:py-4 md:w-1/2 lg:w-full lg:p-0">
                                    <div class="items-start flex-1 text-start">
                                        <flux:heading level="3" class="!text-xl !px-0">UX/UI improvement resulting
                                            in a more
                                            engaging user experience</flux:heading>
                                    </div>
                                    <div class="mt-auto">
                                        <div class="flex items-end gap-2">
                                            <flux:heading class="!text-7xl md:!text-8xl !px-0">3x</flux:heading>
                                            <flux:subheading class="!px-0 pb-4">click-through rate
                                            </flux:subheading>
                                        </div>
                                        <flux:separator class="hidden md:block" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </flux:card>
                </article>

                <flux:separator class="!mb-6 !mt-12" />

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                    <article>
                        <flux:card
                            class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 !border-transparent space-y-6 hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">
                            <img class="object-cover rounded-lg h-[50vh] w-full" src="{{ asset('f1.jpg') }}">
                            <div class="space-y-3">
                                <flux:subheading level="3">Samsung: A multibillion dollar company focused on
                                    smartphones
                                    innovation.
                                </flux:subheading>
                                <div class="flex items-end space-x-2">
                                    <flux:heading class="!text-5xl lg:!text-7xl !px-0">x2</flux:heading>
                                    <flux:subheading class="!px-0 mb-3 lg:!mb-4">collected emails</flux:subheading>
                                </div>
                            </div>
                        </flux:card>
                    </article>

                    <article>
                        <flux:card
                            class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 !border-transparent space-y-6 hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">
                            <img class="object-cover rounded-lg h-[50vh] w-full" src="{{ asset('f2.jpg') }}">
                            <div class="space-y-3">
                                <flux:subheading level="3">Nike: Famous sports clothing brand that reshapes the
                                    industry.
                                </flux:subheading>
                                <div class="flex items-end space-x-2">
                                    <flux:heading class="!text-5xl lg:!text-7xl !px-0">22%</flux:heading>
                                    <flux:subheading class="!px-0 mb-3 lg:!mb-4">increased visibility</flux:subheading>
                                </div>
                            </div>
                        </flux:card>
                    </article>

                    <article>
                        <flux:card
                            class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 !border-transparent space-y-6 hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">
                            <img class="object-cover rounded-lg h-[50vh] w-full" src="{{ asset('f3.jpg') }}">
                            <div class="space-y-3">
                                <flux:subheading level="3">Coca Cola Company: A global leader in the beverage
                                    industry.
                                </flux:subheading>
                                <div class="flex items-end space-x-2">
                                    <flux:heading class="!text-5xl lg:!text-7xl !px-0">+35,000</flux:heading>
                                    <flux:subheading class="!px-0 mb-3 lg:!mb-4">new customers</flux:subheading>
                                </div>
                            </div>
                        </flux:card>
                    </article>

                    <article>
                        <flux:card
                            class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 !border-transparent space-y-6 hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">
                            <img class="object-cover rounded-lg h-[50vh] w-full" src="{{ asset('f4.jpg') }}">
                            <div class="space-y-3">
                                <flux:subheading level="3">Gucci: Famous luxury brand known for its handbags and
                                    shoes.
                                </flux:subheading>
                                <div class="flex items-end space-x-2">
                                    <flux:heading class="!text-5xl lg:!text-7xl !px-0">6</flux:heading>
                                    <flux:subheading class="!px-0 mb-3 lg:!mb-4">languages</flux:subheading>
                                </div>
                            </div>
                        </flux:card>
                    </article>
                </div>

                <div class="flex justify-end">
                    <flux:button icon-trailing="arrow-up-right" as="link" variant="ghost" wire:navigate
                        href="/pricing">
                        Our plans
                    </flux:button>
                </div>
            </div>
        </section>

        <!-- Success Stories -->
        <section class="min-h-screen py-6 space-y-6 ">
            <flux:heading level="2" class="font-bold py-6 text-center !text-4xl lg:!text-5xl">Learn more from our
                <br>customers success
            </flux:heading>

            <div class="grid grid-cols-1 gap-4 pt-6 sm:grid-cols-2 lg:grid-cols-3">
                <a wire:navigate href="/blog">
                    <article>
                        <flux:card class="!bg-transparent !p-0 mx-6 sm:mx-0">
                            <img class="rounded-t-lg rounded-b-none h-[40vh] sm:h-[25vh] md:h-[40vh] w-full object-cover"
                                src="{{ asset('success1.jpg') }}">
                            <div class="p-4">
                                <flux:subheading>SEO</flux:subheading>
                                <flux:heading level="3">How Cristal Electronics increased its organic traffic
                                    (SEO) by 540%
                                </flux:heading>
                            </div>
                        </flux:card>
                    </article>
                </a>

                <a wire:navigate href="/blog">
                    <article>
                        <flux:card class="!bg-transparent !p-0 mx-6 sm:mx-0">
                            <img class="rounded-t-lg rounded-b-none h-[40vh] sm:h-[25vh] md:h-[40vh] w-full object-cover"
                                src="{{ asset('success2.jpg') }}">
                            <div class="p-4">
                                <flux:subheading>Analytics</flux:subheading>
                                <flux:heading level="3">How Mountain Lion optimized their website speed by 40%
                                </flux:heading>
                            </div>
                        </flux:card>
                    </article>
                </a>

                <a wire:navigate href="/blog">
                    <article>
                        <flux:card class="!bg-transparent !p-0 mx-6 sm:mx-0">
                            <img class="rounded-t-lg rounded-b-none h-[40vh] sm:h-[25vh] md:h-[40vh] w-full object-cover"
                                src="{{ asset('success3.jpg') }}">
                            <div class="p-4">
                                <flux:subheading>Development</flux:subheading>
                                <flux:heading level="3">How our agency managed to deliver +30 websitesin 2024
                                </flux:heading>
                            </div>
                        </flux:card>
                    </article>
                </a>
            </div>

            <div class="flex justify-end">
                <flux:button icon-trailing="arrow-up-right" as="link" variant="ghost" wire:navigate
                    href="/blog">
                    All articles
                </flux:button>
            </div>
        </section>
    </flux:main>
</x-app-layout>
