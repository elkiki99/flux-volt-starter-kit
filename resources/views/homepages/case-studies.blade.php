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
                        class="sm:hover:!bg-zinc-50 !p-0 sm:!p-6 transition-none sm:transition-[border,background] duration-300 sm:dark:hover:!border-zinc-700 dark:hover:border-none hover:border-none border-none sm:!border sm:dark:hover:!bg-zinc-800 dark:hover:bg-none hover:bg-none !border-transparent hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">

                        <div class="block gap-4 lg:flex">
                            <div class="w-full lg:w-1/2">
                                <img class="object-cover w-full rounded-lg h-[30vh] md:h-[60vh]"
                                    src="{{ asset('case_study-1.jpg') }}" alt="Case Study 1.1">
                            </div>

                            <div
                                class="lg:w-1/2 w-full flex flex-col md:flex-row-reverse lg:flex-col justify-start min-h-[40vh] sm:min-h-[60vh] gap-4">
                                <div
                                    class="flex flex-row w-full gap-4 pt-4 md:flex-col md:w-1/2 lg:flex lg:flex-row lg:w-full lg:space-y-0 lg:pt-0">
                                    <img class="object-cover rounded-lg h-[15vh] sm:h-[25vh] w-full"
                                        src="{{ asset('case_study-13.webp') }}" alt="Case Study 1.2">
                                    <img class="object-cover rounded-lg h-[15vh] sm:h-[25vh] w-full"
                                        src="{{ asset('case_study-12.webp') }}" alt="Case Study 1.3">
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
                        class="sm:hover:!bg-zinc-50 !p-0 sm:!p-6 transition-none sm:transition-[border,background] duration-300 sm:dark:hover:!border-zinc-700 dark:hover:border-none hover:border-none border-none sm:!border sm:dark:hover:!bg-zinc-800 dark:hover:bg-none hover:bg-none !border-transparent hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">

                        <div class="block gap-4 lg:flex">
                            <div class="w-full lg:w-1/2">
                                <img class="object-cover w-full rounded-lg h-[30vh] md:h-[60vh]"
                                    src="{{ asset('case_study-5.webp') }}" alt="Case Study 2.1">
                            </div>

                            <div
                                class="lg:w-1/2 w-full flex flex-col md:flex-row-reverse lg:flex-col justify-start min-h-[40vh] sm:min-h-[60vh] gap-4">
                                <div
                                    class="flex flex-row w-full gap-4 pt-4 md:flex-col md:w-1/2 lg:flex lg:flex-row lg:w-full lg:space-y-0 lg:pt-0">
                                    <img class="object-cover rounded-lg h-[15vh] sm:h-[25vh] w-full"
                                        src="{{ asset('case_study-4.webp') }}" alt="Case Study 2.2">
                                    <img class="object-cover rounded-lg h-[15vh] sm:h-[25vh] w-full"
                                        src="{{ asset('case_study-6.webp') }}" alt="Case Study 2.3">
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
                

                <div class="flex justify-end">
                    <flux:button icon-trailing="arrow-up-right" as="link" variant="ghost" wire:navigate
                        href="/pricing">
                        Case pricing
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
                        <flux:card class="!bg-transparent !p-0">
                            <img class="rounded-t-lg rounded-b-none h-[30vh] sm:h-[25vh] md:h-[40vh] w-full object-cover"
                                src="{{ asset('success1.jpg') }}" alt="Success 1">
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
                        <flux:card class="!bg-transparent !p-0">
                            <img class="rounded-t-lg rounded-b-none h-[30vh] sm:h-[25vh] md:h-[40vh] w-full object-cover"
                                src="{{ asset('success2.jpg') }}" alt="Success 2">
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
                        <flux:card class="!bg-transparent !p-0">
                            <img class="rounded-t-lg rounded-b-none h-[30vh] sm:h-[25vh] md:h-[40vh] w-full object-cover"
                                src="{{ asset('success3.jpg') }}" alt="Success 3">
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
