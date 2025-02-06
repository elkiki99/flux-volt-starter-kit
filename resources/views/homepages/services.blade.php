<x-app-layout>
    <flux:main container>
        <!-- Hero section -->
        <section class="flex flex-col justify-center h-[85vh] pb-6 overflow-hidden">
            <div class="z-10 pb-10 my-6 space-y-6">
                <div class="space-y-3">
                    <div class="!text-center lg:!text-start">
                        <flux:badge color="amber" icon="lock-closed" size="sm" variant="pill" class="mb-3">Security first
                        </flux:badge>
                    </div>

                    <flux:heading level="1"
                        class="!text-5xl md:!text-7xl font-black max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                        Web development, digital <br class="hidden lg:block">marketing, optimization, <br class="hidden lg:block">we got <span
                            class="!text-5xl font-black text-transparent md:!text-7xl dark:from-amber-500 dark:via-amber-200 dark:to-amber-600 bg-gradient-to-r from-amber-600 via-amber-300 to-amber-500 bg-clip-text">you covered</span></flux:heading>
                    <flux:subheading level="2"
                        class="max-w-xl mx-auto text-sm text-center md:text-base lg:text-start lg:mx-0 lg:max-w-full">
                        From
                        web development to digital marketing strategies, discover
                        how<br class="hidden lg:block"> we solve your unique challenges and take your <br
                            class="hidden lg:block">business to the next level.
                    </flux:subheading>
                </div>

                <div class="flex items-center justify-center gap-4 lg:justify-start">
                    <flux:button wire:navigate href="/contact" icon-trailing="arrow-up-right">Contact us
                    </flux:button>
                    <flux:button variant="primary" wire:navigate href="/pricing" icon-trailing="arrow-up-right">Get
                        started
                    </flux:button>
                </div>
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
                        href="/case-studies">
                        Case studies
                    </flux:button>
                </div>
            </div>
        </section>

        <!-- Card services -->
        <section class="min-h-screen py-6 space-y-6">
            <flux:heading level="2" class="font-bold py-6 text-center !text-4xl lg:!text-5xl">We offer quality services
                <br>for quality results
            </flux:heading>

            <div class="grid grid-cols-1 gap-4 py-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <flux:card size="sm"
                    class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <flux:icon.cpu-chip class="mb-3 text-amber-600 dark:text-amber-400" variant="solid" />
                    <flux:heading level="3">System integration</flux:heading>
                    <flux:subheading>We connect your app with tools you use daily, ensuring
                        a seamless and efficient experience.</flux:subheading>
                </flux:card>

                <flux:card size="sm"
                    class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <flux:icon.credit-card class="mb-3 text-amber-600 dark:text-amber-400" variant="solid" />
                    <flux:heading level="3">Payment methods</flux:heading>
                    <flux:subheading>Accept payments with Stripe, PayPal, MercadoPago,
                        and many other popular options.</flux:subheading>
                </flux:card>

                <flux:card size="sm"
                    class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <flux:icon.arrow-trending-up class="mb-3 text-amber-600 dark:text-amber-400" variant="solid" />
                    <flux:heading level="3">Analytics</flux:heading>
                    <flux:subheading>Track your business performance and key metrics in
                        one convenient, centralized place.</flux:subheading>
                </flux:card>

                <flux:card size="sm"
                    class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <flux:icon.globe-alt class="mb-3 text-amber-600 dark:text-amber-400" variant="solid" />
                    <flux:heading level="3">Global reach</flux:heading>
                    <flux:subheading>Expand your business globally with multi-language
                        and multi-currency support.</flux:subheading>
                </flux:card>

                <flux:card size="sm"
                    class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <flux:icon.wrench class="mb-3 text-amber-600 dark:text-amber-400" variant="solid" />
                    <flux:heading level="3">Custom development</flux:heading>
                    <flux:subheading>We build tailored solutions to fit your business
                        needs and strategic goals.</flux:subheading>
                </flux:card>

                <flux:card size="sm"
                    class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <flux:icon.chart-bar class="mb-3 text-amber-600 dark:text-amber-400" variant="solid" />
                    <flux:heading level="3">Marketing automation</flux:heading>
                    <flux:subheading>Optimize your campaigns with AI-powered marketing
                        tools that drive engagement.</flux:subheading>
                </flux:card>

                <flux:card size="sm"
                    class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <flux:icon.lock-closed class="mb-3 text-amber-600 dark:text-amber-400" variant="solid" />
                    <flux:heading level="3">Security & compliance</flux:heading>
                    <flux:subheading>We ensure compliance with top security standards
                        to protect your data and users.</flux:subheading>
                </flux:card>

                <flux:card size="sm"
                    class="!bg-transparent !p-8 hover:border-amber-50/50 transition duration-300">
                    <flux:icon.lifebuoy class="mb-3 text-amber-600 dark:text-amber-400" variant="solid" />
                    <flux:heading level="3">24/7 support</flux:heading>
                    <flux:subheading>Our support team is available anytime to assist
                        with any technical challenges.</flux:subheading>
                </flux:card>
            </div>

            <div class="flex justify-end">
                <flux:button icon-trailing="arrow-up-right" as="link" variant="ghost" wire:navigate
                    href="/about">
                    About us
                </flux:button>
            </div>
        </section>

        <!-- FAQs-->
        <section class="min-h-screen py-6 space-y-6">
            <flux:heading level="2" class="font-bold text-center !text-4xl lg:!text-5xl py-6">Discover how we manage to
                <br>achieve your goals
            </flux:heading>

            <div class="grid grid-cols-1 gap-8 mt-6 lg:grid-cols-3">
                <flux:card class="w-full py-6 lg:col-span-1 !bg-transparent">
                    <img loading="lazy" class="rounded-lg h-[60vh] w-full object-cover" src="{{ asset('ruan.jpg') }}" alt="Accordion">
                </flux:card>

                <flux:accordion exclusive transition class="w-full py-6 lg:col-span-2">
                    <flux:accordion.item expanded>
                        <flux:accordion.heading level="3">SEO optimization</flux:accordion.heading>
                        <flux:accordion.content>
                            Our expert SEO services ensure your website ranks higher on search engines. We utilize the
                            latest techniques and strategies to enhance your online visibility and drive organic
                            traffic, helping your business reach the right audience.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item>
                        <flux:accordion.heading level="3">Responsive web design</flux:accordion.heading>
                        <flux:accordion.content>
                            We specialize in creating responsive websites that offer seamless experiences across all
                            devices. Our design philosophy ensures your site looks stunning and functions flawlessly,
                            whether on desktop, tablet, or mobile.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item>
                        <flux:accordion.heading level="3">Custom web development</flux:accordion.heading>
                        <flux:accordion.content>
                            We build tailored websites that are not only visually appealing but also functionally
                            robust. From content management systems to e-commerce platforms, we deliver custom solutions
                            to meet your unique business needs.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item>
                        <flux:accordion.heading level="3">Website maintenance & support</flux:accordion.heading>
                        <flux:accordion.content>
                            Our commitment doesn't end with the launch. We offer ongoing maintenance and support to
                            ensure your website is always up-to-date, secure, and performing at its best, so you can
                            focus on growing your business.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item>
                        <flux:accordion.heading level="3">UX/UI design</flux:accordion.heading>
                        <flux:accordion.content>
                            Our user-centric design approach ensures that every interaction on your website is intuitive
                            and engaging. We combine aesthetic design with functionality, making sure your visitors have
                            a seamless and enjoyable experience.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item>
                        <flux:accordion.heading level="3">E-commerce solutions</flux:accordion.heading>
                        <flux:accordion.content>
                            We specialize in developing robust e-commerce platforms that help businesses grow online.
                            From product catalog management to secure payment gateways, we ensure that your e-commerce
                            site is easy to manage and offers a great shopping experience for your customers.
                        </flux:accordion.content>
                    </flux:accordion.item>
                </flux:accordion>
            </div>

            <div class="flex justify-end">
                <flux:button icon-trailing="arrow-up-right" as="link" variant="ghost" wire:navigate
                    href="/pricing">
                    Our pricing
                </flux:button>
            </div>
        </section>

        <!-- Our blog -->
        <section class="min-h-screen py-6 mt-6 space-y-6">
            <flux:heading level="2" class="font-bold text-center py-6 !text-4xl lg:!text-5xl">Check out our most popular
                resources
            </flux:heading>

            <div class="items-center gap-4 space-y-6 lg:flex lg:space-y-0">
                <article class=" lg:w-1/3">
                    <flux:card
                        class="relative !p-0 h-[80vh] hover:opacity-80 hover:bg-black transition duration-300 !border-none">
                        <a wire:navigate href="#">
                            <img loading="lazy" class="object-cover w-full h-full rounded-lg"
                                src="{{ asset('joe.jpg') }}" alt="Popular Article 1">
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

            <div class="flex justify-end">
                <flux:button icon-trailing="arrow-up-right" as="link" variant="ghost" wire:navigate
                    href="/blog">
                    Our blog
                </flux:button>
            </div>
        </section>
    </flux:main>
</x-app-layout>
