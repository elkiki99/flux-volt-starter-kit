<x-app-layout>
    <flux:main container>
        <!-- Hero section -->
        <section class="flex flex-col min-h-[85vh] mb-12 space-y-6">
            <div class="space-y-12">
                <div
                    class="flex flex-col items-center justify-between text-center lg:items-end lg:text-start lg:flex-row">
                    <flux:heading level="1"
                        class="!text-5xl md:!text-7xl font-black max-w-4xl mx-auto lg:mx-0 lg:max-w-full">
                        Blog by <span
                            class="!text-5xl font-black text-transparent md:!text-7xl dark:from-amber-500 dark:via-amber-200 dark:to-amber-600 bg-gradient-to-r from-amber-600 via-amber-300 to-amber-500 bg-clip-text">{{ config('app.name') }}</span>
                    </flux:heading>

                    <flux:subheading level="2" class="mt-3 mr-0 lg:mr-8 lg:mt-0">
                        Your go-to blog for digital marketing, SEO & <br class="hidden lg:block">web performance.
                    </flux:subheading>
                </div>
            </div>

            <div class="py-6">
                <flux:separator />
            </div>

            <article>
                <flux:card
                    class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 hover:!border-zinc-200 hover:!cursor-pointer !p-0 !bg-transparent">
                    <div class="flex flex-col gap-4 lg:flex-row">
                        <div class="w-full lg:w-1/2">
                            <img class="object-cover w-full rounded-lg h-[60vh]" src="{{ asset('33.webp') }}" alt="Blog 1">
                        </div>

                        <div class="flex flex-col justify-center w-full p-8 space-y-6 lg:w-1/2">
                            <flux:subheading>News</flux:subheading>
                            <flux:heading level="2" class="!text-3xl">Website awards 2025: {{ config('app.name') }}
                                nominated
                                in 3 categories</flux:heading>
                            <flux:subheading class="">We focus on creating seamless, intuitive experiences
                                that prioritize user needs and expectations.</flux:subheading>
                            <flux:link href="#" wire:navigate>
                                Read more
                            </flux:link>
                        </div>
                    </div>
                </flux:card>
            </article>
        </section>

        <!-- Main articles -->
        <section class="min-h-screen py-6 space-y-6">
            <flux:heading level="2" class="font-bold py-6 text-center !text-4xl lg:!text-5xl">Our latest content
            </flux:heading>

            <livewire:layout.blog-nav-bar />

            <div class="grid grid-cols-1 gap-4 pt-6 sm:grid-cols-2 lg:grid-cols-3">
                <a wire:navigate href="#">
                    <article>
                        <flux:card class="!bg-transparent !p-0">
                            <img loading="lazy"
                                class="rounded-t-lg rounded-b-none h-[30vh] sm:h-[25vh] md:h-[40vh] w-full object-cover"
                                src="{{ asset('success1.jpg') }}" alt="Success Story 1">
                            <div class="p-4">
                                <flux:subheading>SEO</flux:subheading>
                                <flux:heading level="3">How Cristal Electronics increased its organic traffic (SEO)
                                    by 540%
                                </flux:heading>
                            </div>
                        </flux:card>
                    </article>
                </a>

                <a wire:navigate href="#">
                    <article>
                        <flux:card class="!bg-transparent !p-0">
                            <img loading="lazy"
                                class="rounded-t-lg rounded-b-none h-[30vh] sm:h-[25vh] md:h-[40vh] w-full object-cover"
                                src="{{ asset('success2.jpg') }}" alt="Success Story 2">
                            <div class="p-4">
                                <flux:subheading>Analytics</flux:subheading>
                                <flux:heading level="3">How Mountain Lion optimized their website speed by 40%
                                </flux:heading>
                            </div>
                        </flux:card>
                    </article>
                </a>

                <a wire:navigate href="#">
                    <article>
                        <flux:card class="!bg-transparent !p-0">
                            <img loading="lazy"
                                class="rounded-t-lg rounded-b-none h-[30vh] sm:h-[25vh] md:h-[40vh] w-full object-cover"
                                src="{{ asset('success3.jpg') }}" alt="Success Story 3">
                            <div class="p-4">
                                <flux:subheading>Development</flux:subheading>
                                <flux:heading level="3">How our agency managed to deliver +30 websites in 2024
                                </flux:heading>
                            </div>
                        </flux:card>
                    </article>
                </a>
            </div>
        </section>

        <!-- Popular resources -->
        <section class="min-h-screen py-6 mt-6 space-y-6">
            <flux:heading level="2" class="font-bold text-center py-6 !text-4xl lg:!text-5xl">Check out our most
                popular
                resources
            </flux:heading>

            <div class="items-center gap-4 space-y-6 lg:flex lg:space-y-0">
                <article class=" lg:w-1/3">
                    <flux:card
                        class="relative !p-0 h-[80vh] hover:opacity-80 hover:bg-black transition duration-300 !border-none">
                        <a wire:navigate href="#">
                            <img loading="lazy" class="object-cover w-full h-full rounded-lg"
                                src="{{ asset('joe.jpg') }}" alt="Popular article 2">
                            <div
                                class="absolute bottom-0 left-0 w-full h-32 rounded-b-lg bg-gradient-to-t from-black/90 to-transparent">
                            </div>
                            <flux:heading level="3" class="absolute !text-2xl bottom-10 left-4 !text-white">On page SEO
                                optimization
                            </flux:heading>
                            <div class="absolute flex items-center gap-2 font-bold text-white bottom-4 left-4">
                                <flux:subheading class="!text-zinc-300">Read article</flux:subheading>
                                <flux:icon.arrow-up-right variant="mini" class="!text-zinc-300" />
                            </div>
                        </a>
                    </flux:card>
                </article>

                <article class=" lg:w-1/3">
                    <flux:card
                        class="relative !p-0 h-[80vh] hover:opacity-80 hover:bg-black transition duration-300 !border-none">
                        <a wire:navigate href="#">
                            <img loading="lazy" class="object-cover w-full h-full rounded-lg"
                                src="{{ asset('umb.jpg') }}" alt="Popular Article 2">
                            <div
                                class="absolute bottom-0 left-0 w-full h-32 rounded-b-lg bg-gradient-to-t from-black/90 to-transparent">
                            </div>
                            <flux:heading level="3" class="absolute !text-2xl bottom-10 left-4 !text-white">Web data & conversion
                            </flux:heading>
                            <div class="absolute flex items-center gap-2 font-bold text-white bottom-4 left-4">
                                <flux:subheading class="!text-zinc-300">Read article</flux:subheading>
                                <flux:icon.arrow-up-right variant="mini" class="!text-zinc-300" />
                            </div>
                        </a>
                    </flux:card>
                </article>

                <article class=" lg:w-1/3">
                    <flux:card
                        class="relative !p-0 h-[80vh] hover:opacity-80 hover:bg-black transition duration-300 !border-none">
                        <a wire:navigate href="#">
                            <img loading="lazy" class="object-cover w-full h-full rounded-lg"
                                src="{{ asset('blog-33.webp') }}" alt="Popular Article 3">
                            <div
                                class="absolute bottom-0 left-0 w-full h-32 rounded-b-lg bg-gradient-to-t from-black/90 to-transparent">
                            </div>
                            <flux:heading level="3" class="absolute !text-2xl bottom-10 left-4 !text-white">Performance as a
                                standard
                            </flux:heading>
                            <div class="absolute flex items-center gap-2 font-bold text-white bottom-4 left-4">
                                <flux:subheading class="!text-zinc-300">Read article</flux:subheading>
                                <flux:icon.arrow-up-right variant="mini" class="!text-zinc-300" />
                            </div>
                        </a>
                    </flux:card>
                </article>
            </div>
        </section>
    </flux:main>
</x-app-layout>
