<x-app-layout>
    <flux:main container>
        <!-- Hero section -->
        <section class="min-h-[85vh] flex flex-col space-y-6">
            <div class="flex-grow"></div>

            <div class="mt-auto space-y-3">
                <div class="flex flex-col w-full">
                    <div class="flex items-end justify-center mb-3 lg:justify-start">
                        <div class="flex">
                            <flux:icon.star class="text-amber-500 dark:text-amber-300" variant="mini" />
                            <flux:icon.star class="text-amber-500 dark:text-amber-300" variant="mini" />
                            <flux:icon.star class="text-amber-500 dark:text-amber-300" variant="mini" />
                            <flux:icon.star class="text-amber-500 dark:text-amber-300" variant="mini" />
                            <flux:icon.star class="text-amber-500 dark:text-amber-300" variant="mini" />
                        </div>

                        <span class="ml-2 text-xs font-semibold">4.99 AVERAGE RATING</span>
                    </div>

                    <flux:heading level="1"
                        class="!text-5xl md:!text-7xl font-black max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                        Transform low engagement<br class="hidden lg:block"> into <span
                            class="!text-5xl font-black text-transparent md:!text-7xl dark:from-amber-500 dark:via-amber-200 dark:to-amber-600 bg-gradient-to-r from-amber-600 via-amber-300 to-amber-500 bg-clip-text">paying
                            customers</span></flux:heading>
                    <flux:subheading level="2"
                        class="max-w-xl mx-auto text-sm text-center md:text-base lg:text-start lg:mx-0 lg:max-w-full">
                        Cut
                        through the noise and build a strong, lasting
                        connection with<br class="hidden lg:block">your ideal audience in this vast digital world.<br
                            class="hidden lg:block">We handle the heavy
                        lifting.
                    </flux:subheading>
                </div>

                <div class="flex items-center justify-center gap-4 lg:justify-start">
                    <flux:button wire:navigate href="/about" icon-trailing="arrow-up-right">About us</flux:button>
                    <flux:button variant="primary" wire:navigate href="/pricing" icon-trailing="arrow-up-right">Get
                        started
                    </flux:button>
                </div>
            </div>

            <div class="flex-grow"></div>

            <!-- Pines UI Marquee -->
            <div class="!my-6">
                <livewire:components.marquee />
            </div>
        </section>

        <!-- More of us (services, about us, case studies) -->
        <section class="min-h-screen py-6 space-y-6">
            <flux:heading level="2" class="font-bold py-6 !text-4xl text-center lg:!text-5xl">All in one team for
                <br>personalized
                services
            </flux:heading>

            <div class="py-6 space-y-6">
                <!-- Services -->
                <flux:card class="lg:flex lg:!pt-10 lg:!pb-10 !pl-10 lg:!pr-0 !pt-0 !pr-10 !bg-transparent">
                    <article class="flex flex-col-reverse w-full gap-8 lg:flex-row">
                        <div class="flex flex-col w-full space-y-6 lg:w-1/2">
                            <div class="gap-2">
                                <flux:heading level="3" class="!text-3xl">Web design</flux:heading>
                                <flux:subheading class="max-w-xl">75% of users base a company's
                                    credibility on it's
                                    website design. Make it stand out - entrust your website design to a specialized
                                    digital
                                    agency.</flux:subheading>
                            </div>

                            <div class="flex flex-col flex-grow gap-2 py-6 space-y-6">
                                <div class="space-y-3">
                                    <div class="flex items-center gap-2">
                                        <flux:icon.check-circle />
                                        <flux:heading level="3" class="!text-xl">UX/UI Design</flux:heading>
                                    </div>
                                    <flux:subheading class="max-w-2xl ml-[2rem]">We focus on the user
                                        experience and
                                        user
                                        interface
                                        for maximum engagement, while still maintaining optimized functionality.
                                    </flux:subheading>
                                </div>

                                <div class="space-y-3">
                                    <div class="flex items-center gap-2">
                                        <flux:icon.check-circle />
                                        <flux:heading class="!text-xl">Solid integrations</flux:heading>
                                    </div>
                                    <flux:subheading class="max-w-2xl ml-[2rem]">We ensure seamless integration with
                                        popular
                                        tools and
                                        platforms, ensuring maximum efficiency for your bussiness.</flux:subheading>
                                </div>
                            </div>

                            <flux:button class="!w-auto inline-block text-start" icon-trailing="arrow-up-right"
                                wire:navigate as="link" variant="filled" href="/services"
                                class="!w-auto text-start">
                                What we offer</flux:button>
                        </div>

                        <flux:card
                            class="!bg-transparent lg:w-1/2 min-h-[20vh] w-full !pt-0 lg:!pt-1 !pb-1 !pl-1 !pr-1 h-full lg:!pr-0  lg:!rounded-l-lg rounded-t-none rounded-b-lg lg:!rounded-r-none">
                            <img class="object-cover w-full h-full rounded-b-lg lg:rounded-l-lg lg:rounded-r-none"
                                loading="lazy" src="{{ asset('0.webp') }}" alt="Image of service 1">
                        </flux:card>
                    </article>
                </flux:card>

                <!-- About us -->
                <flux:card class="lg:flex lg:!pt-10 lg:!pb-10 !pl-10 lg:!pl-0 !pt-0 !pr-10 !bg-transparent">
                    <article class="flex flex-col-reverse w-full gap-8 lg:flex-row-reverse">
                        <div class="flex flex-col w-full space-y-6 lg:w-1/2">
                            <div class="gap-2">
                                <flux:heading level="3" class="!text-3xl">Our principles</flux:heading>
                                <flux:subheading class="max-w-xl">We believe in handcraftsmanship and
                                    attention to
                                    detail.
                                    We are a group of
                                    dedicated individuals trying to build awesome stuff, and we try to strike for
                                    uniqueness.</flux:subheading>
                            </div>

                            <div class="flex flex-col flex-grow gap-2 py-6 space-y-6">
                                <div class="space-y-3">
                                    <div class="flex items-center gap-2">
                                        <flux:icon.check-circle />
                                        <flux:heading level="3" class="!text-xl">Integrity</flux:heading>
                                    </div>
                                    <flux:subheading class="max-w-2xl ml-[2rem]">We uphold the highest
                                        standards of
                                        honesty and transparency in all our dealings, fostering trust and
                                        accountability.
                                    </flux:subheading>
                                </div>

                                <div class="space-y-3">
                                    <div class="flex items-center gap-2">
                                        <flux:icon.check-circle />
                                        <flux:heading class="!text-xl">Collaboration</flux:heading>
                                    </div>
                                    <flux:subheading class="max-w-2xl ml-[2rem]">We believe that great things are
                                        achieved through collaboration, teamwork, and mutual respect. We work together
                                        to create innovative solutions.</flux:subheading>
                                </div>
                            </div>

                            <flux:button class="!w-auto inline-block text-start" icon-trailing="arrow-up-right"
                                wire:navigate as="link" variant="filled" href="/about" class="!w-auto text-start">
                                Who we are</flux:button>
                        </div>

                        <flux:card
                            class="!bg-transparent lg:w-1/2 min-h-[20vh] w-full !pt-0 lg:!pt-1 !pb-1 !pl-1 !pr-1 h-full lg:!pr-0  lg:!rounded-l-lg rounded-t-none rounded-b-lg lg:!rounded-r-none">
                            <img class="object-cover w-full h-full rounded-b-lg lg:rounded-l-lg lg:rounded-r-none"
                                loading="lazy" src="{{ asset('111.webp') }}" alt="Image of service 2">
                        </flux:card>
                    </article>
                </flux:card>

                <!-- Case studies -->
                <flux:card class="lg:flex lg:!pt-10 lg:!pb-10 !pl-10 lg:!pr-0 !pt-0 !pr-10 !bg-transparent">
                    <article class="flex flex-col-reverse w-full gap-8 lg:flex-row">
                        <div class="flex flex-col w-full space-y-6 lg:w-1/2">
                            <div class="gap-2">
                                <flux:heading level="3" class="!text-3xl">Tailored solutions</flux:heading>
                                <flux:subheading class="max-w-xl">We approach each project with a
                                    comprehensive,
                                    results-driven mindset. Whether it's enhancing user engagement or streamlining
                                    business processes, our solutions are designed to align with your unique objectives,
                                    bringing measurable impact and growth.</flux:subheading>
                            </div>

                            <div class="flex flex-col flex-grow gap-2 py-6 space-y-6">
                                <div class="space-y-3">
                                    <div class="flex items-center gap-2">
                                        <flux:icon.check-circle />
                                        <flux:heading level="3" class="!text-xl">Innovative problem solving
                                        </flux:heading>
                                    </div>
                                    <flux:subheading class="max-w-2xl ml-[2rem]">We focus on addressing
                                        complex
                                        challenges with creative and tailored digital solutions that push boundaries and
                                        deliver lasting value for our clients.
                                    </flux:subheading>
                                </div>

                                <div class="space-y-3">
                                    <div class="flex items-center gap-2">
                                        <flux:icon.check-circle />
                                        <flux:heading class="!text-xl">Scalable infrastructure</flux:heading>
                                    </div>
                                    <flux:subheading class="max-w-2xl ml-[2rem]">We build robust, scalable systems that
                                        evolve with your business, ensuring long-term success and seamless growth as
                                        your needs change.</flux:subheading>
                                </div>
                            </div>

                            <flux:button class="!w-auto inline-block text-start" icon-trailing="arrow-up-right"
                                wire:navigate as="link" variant="filled" href="/case-studies"
                                class="!w-auto text-start">
                                What we do best</flux:button>
                        </div>

                        <flux:card
                            class="!bg-transparent h-full lg:w-1/2 min-h-[20vh] w-full !pt-0 lg:!pt-1 !pb-1 !pl-1 !pr-1 lg:!pr-0  lg:!rounded-l-lg rounded-t-none rounded-b-lg lg:!rounded-r-none">
                            <img class="object-cover w-full h-full rounded-b-lg lg:rounded-l-lg lg:rounded-r-none"
                                loading="lazy" src="{{ asset('22.webp') }}" alt="Image of service 3">
                        </flux:card>
                    </article>
                </flux:card>
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
                                class="lg:w-1/2 w-full flex flex-col md:flex-row-reverse lg:flex-col justify-start min-h-[60vh] gap-4">
                                <div
                                    class="flex flex-row w-full gap-4 pt-4 md:flex-col md:w-1/2 lg:flex lg:flex-row lg:w-full lg:space-y-0 lg:pt-0">
                                    <img class="object-cover rounded-lg h-[15vh] sm:h-[25vh] w-full"
                                        src="{{ asset('case_study-13.webp') }}" alt="Case Study 1.2">
                                    <img class="object-cover rounded-lg h-[15vh] sm:h-[25vh] w-full"
                                        src="{{ asset('case_study-12.webp') }}" alt="Case Study 1.3">
                                </div>
                                <div class="flex flex-col flex-1 w-full gap-4 md:py-4 md:w-1/2 lg:w-full lg:p-0">
                                    <div class="items-start flex-none sm:flex-1 text-start">
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
                                class="lg:w-1/2 w-full flex flex-col md:flex-row-reverse lg:flex-col justify-start min-h-[60vh] gap-4">
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
                        href="/case-studies">
                        Case studies
                    </flux:button>
                </div>
            </div>
        </section>

        <!-- What set us apart -->
        <section class="py-6 space-y-6 ">
            <div class="py-6 text-center">
                <flux:heading level="2" class="font-bold !text-4xl lg:!text-5xl">There are thousands of
                    <br>agencies, so why
                    choose us?
                </flux:heading>
                <flux:subheading level="3">From day one, focused on our core values:
                </flux:subheading>
            </div>

            <ul class="grid max-w-4xl grid-cols-1 gap-4 mx-auto sm:grid-cols-2 lg:grid-cols-3">
                <flux:card class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <li class="flex flex-col items-center gap-2">
                        <flux:icon.cursor-arrow-ripple class="justify-center text-amber-400" />
                        <flux:heading class="text-center">Human-centered design</flux:heading>
                    </li>
                </flux:card>
                <flux:card class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <li class="flex flex-col items-center gap-2">
                        <flux:icon.cube-transparent class="justify-center text-amber-400" />
                        <flux:heading class="text-center">Simplicity</flux:heading>
                    </li>
                </flux:card>
                <flux:card class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <li class="flex flex-col items-center gap-2">
                        <flux:icon.squares-plus variant="mini" class="justify-center text-amber-400" />
                        <flux:heading class="text-center">Intuitive layouts</flux:heading>
                    </li>
                </flux:card>
                <flux:card class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <li class="flex flex-col items-center gap-2">
                        <flux:icon.arrow-trending-up class="justify-center text-amber-400" />
                        <flux:heading class="text-center">Performance as a standard</flux:heading>
                    </li>
                </flux:card>
                <flux:card class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <li class="flex flex-col items-center gap-2">
                        <flux:icon.lock-open class="justify-center text-amber-400" />
                        <flux:heading class="text-center">Ethical & transparent practices
                        </flux:heading>
                    </li>
                </flux:card>
                <flux:card class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <li class="flex flex-col items-center gap-2">
                        <flux:icon.signal class="justify-center text-amber-400" />
                        <flux:heading class="text-center">Relentless curiosity</flux:heading>
                    </li>
                </flux:card>
            </ul>

            <div class="flex justify-end">
                <flux:button icon-trailing="arrow-up-right" as="link" variant="ghost" wire:navigate
                    href="/pricing">
                    Our packages
                </flux:button>
            </div>
        </section>

        <!-- Our blog -->
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
                                src="{{ asset('joe.jpg') }}">
                            <div
                                class="absolute bottom-0 left-0 w-full h-32 rounded-b-lg bg-gradient-to-t from-black/90 to-transparent">
                            </div>
                            <flux:heading level="3" class="absolute !text-2xl bottom-10 left-4 !text-white">On
                                page SEO
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
                                src="{{ asset('umb.jpg') }}">
                            <div
                                class="absolute bottom-0 left-0 w-full h-32 rounded-b-lg bg-gradient-to-t from-black/90 to-transparent">
                            </div>
                            <flux:heading level="3" class="absolute !text-2xl bottom-10 left-4 !text-white">Web
                                data & conversion
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
                                src="{{ asset('blog-33.webp') }}">
                            <div
                                class="absolute bottom-0 left-0 w-full h-32 rounded-b-lg bg-gradient-to-t from-black/90 to-transparent">
                            </div>
                            <flux:heading level="3" class="absolute !text-2xl bottom-10 left-4 !text-white">
                                Performance as a
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

            <div class="flex justify-end">
                <flux:button icon-trailing="arrow-up-right" as="link" variant="ghost" wire:navigate
                    href="/blog">
                    Our blog
                </flux:button>
            </div>
        </section>
    </flux:main>
</x-app-layout>
