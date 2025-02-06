<x-app-layout>
    <flux:main container>
        <!-- Hero section -->
        <section class="flex flex-col justify-center h-[85vh] pb-6">
            <div class="z-10 pb-10 my-6 space-y-6">
                <div class="space-y-3">
                    <div class="!text-center lg:!text-start">
                        <flux:badge icon="rocket-launch" color="amber" size="sm" variant="pill" class="mb-3">
                            Enterprise partner
                        </flux:badge>
                    </div>

                    <flux:heading level="1"
                        class="!text-5xl md:!text-7xl font-black max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                        We are a digital agency <br class="hidden lg:block">dedicated to making <br
                            class="hidden lg:block">stunning <span
                            class="!text-5xl font-black text-transparent md:!text-7xl dark:from-amber-500 dark:via-amber-200 dark:to-amber-600 bg-gradient-to-r from-amber-600 via-amber-300 to-amber-500 bg-clip-text">websites</span>
                    </flux:heading>
                    <flux:subheading level="2"
                        class="max-w-xl mx-auto text-sm text-center md:text-base lg:text-start lg:mx-0 lg:max-w-full">
                        Meet
                        the team behind our innovative digital solutions.
                        Our passion is <br class="hidden lg:block">helping your business grow with tailored strategies
                        <br class="hidden lg:block">and a personalized
                        approach.
                    </flux:subheading>
                </div>

                <div class="flex items-center justify-center gap-4 lg:justify-start">
                    <flux:button wire:navigate href="/services" icon-trailing="arrow-up-right">Our services
                    </flux:button>
                    <flux:button variant="primary" wire:navigate href="/pricing" icon-trailing="arrow-up-right">Get
                        started
                    </flux:button>
                </div>
            </div>
        </section>

        <!-- Us -->
        <section class="min-h-screen py-6 space-y-6">
            <flux:heading level="2" class="font-bold py-6 !text-4xl text-center lg:!text-5xl">Since 2023,
                <br>working on
                delivering
                quality solutions
            </flux:heading>

            <div class="flex flex-col py-6 space-y-6">
                <article>
                    <flux:card
                        class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">
                        <a href="/services" wire:navigate>

                            <div class="flex flex-col-reverse gap-4 lg:flex-row">
                                <div class="w-full lg:w-1/2">
                                    <img loading="lazy" class="object-cover md:w-full rounded-lg h-[60vh] lg:h-[40vh]"
                                        src="{{ asset('33.webp') }}" alt="About 1">
                                </div>

                                <div class="flex flex-col justify-around w-full ml-0 lg:ml-8 lg:w-1/2">
                                    <div>
                                        <flux:heading class="!text-4xl mb-3">01</flux:heading>
                                        <flux:heading level="3" class="!text-2xl">User-centered design
                                        </flux:heading>
                                        <flux:subheading>We focus on creating seamless, intuitive
                                            experiences
                                            that prioritize user needs and expectations.</flux:subheading>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </flux:card>
                </article>

                <flux:separator class="!mb-6 !mt-12" />

                <article>
                    <flux:card
                        class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">
                        <a href="/services" wire:navigate>

                            <div class="flex flex-col-reverse gap-4 lg:flex-row">
                                <div class="w-full lg:w-1/2">
                                    <img loading="lazy" class="object-cover md:w-full rounded-lg h-[60vh] lg:h-[40vh]"
                                        src="{{ asset('44.webp') }}" alt="About 2">
                                </div>

                                <div class="flex flex-col justify-around w-full ml-0 lg:ml-8 lg:w-1/2">
                                    <div>
                                        <flux:heading class="!text-4xl mb-3">02</flux:heading>
                                        <flux:heading level="3" class="!text-2xl">Optimizing for speed &
                                            performance
                                        </flux:heading>
                                        <flux:subheading>We ensure fast loading times and smooth
                                            performance
                                            to improve user engagement and SEO rankings.</flux:subheading>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </flux:card>
                </article>

                <flux:separator class="!mb-6 !mt-12" />

                <article>
                    <flux:card
                        class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">
                        <a href="/services" wire:navigate>

                            <div class="flex flex-col-reverse gap-4 lg:flex-row">
                                <div class="w-full lg:w-1/2">
                                    <img loading="lazy" class="object-cover md:w-full rounded-lg h-[60vh] lg:h-[40vh]"
                                        src="{{ asset('case_study-1.jpg') }}" alt="About 3">
                                </div>

                                <div class="flex flex-col justify-around w-full ml-0 lg:ml-8 lg:w-1/2">
                                    <div>
                                        <flux:heading class="!text-4xl mb-3">03</flux:heading>
                                        <flux:heading level="3" class="!text-2xl">Leveraging data-driven decisions
                                        </flux:heading>
                                        <flux:subheading>We use analytics and user feedback to make
                                            informed
                                            decisions and continuously refine your website’s strategy.</flux:subheading>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </flux:card>
                </article>

                <flux:separator class="!mb-6 !mt-12" />

                <article>
                    <flux:card
                        class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">
                        <a href="/services" wire:navigate>

                            <div class="flex flex-col-reverse gap-4 lg:flex-row">
                                <div class="w-full lg:w-1/2">
                                    <img loading="lazy" class="object-cover md:w-full rounded-lg h-[60vh] lg:h-[40vh]"
                                        src="{{ asset('case_study-4.webp') }}" alt="About 4">
                                </div>

                                <div class="flex flex-col justify-around w-full ml-0 lg:ml-8 lg:w-1/2">
                                    <div>
                                        <flux:heading class="!text-4xl mb-3">04</flux:heading>
                                        <flux:heading level="3" class="!text-2xl">Develop a strong content strategy
                                        </flux:heading>
                                        <flux:subheading>Provide valuable, relevant, and high-quality
                                            content
                                            that educates, informs, and engages your audience.</flux:subheading>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </flux:card>
                </article>

                <flux:separator class="!mb-6 !mt-12" />

                <article>
                    <flux:card
                        class="hover:!bg-zinc-50 transition-[border,background] duration-300 dark:hover:!border-zinc-700 !border dark:hover:!bg-zinc-800 hover:!border-zinc-200 hover:!cursor-pointer !bg-transparent">
                        <a href="/services" wire:navigate>

                            <div class="flex flex-col-reverse gap-4 lg:flex-row">
                                <div class="w-full lg:w-1/2">
                                    <img loading="lazy" class="object-cover md:w-full rounded-lg h-[60vh] lg:h-[40vh]"
                                        src="{{ asset('55.webp') }}" alt="About 5">
                                </div>

                                <div class="flex flex-col justify-around w-full ml-0 lg:ml-8 lg:w-1/2">
                                    <div>
                                        <flux:heading class="!text-4xl mb-3">05</flux:heading>
                                        <flux:heading level="3" class="!text-2xl">Enhance mobile-first experience
                                        </flux:heading>
                                        <flux:subheading>Prioritize mobile responsiveness and design to
                                            capture the growing number of users on mobile devices.</flux:subheading>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </flux:card>
                </article>

                <flux:separator class="!mb-6 !mt-12" />

                <div class="flex justify-end">
                    <flux:button icon-trailing="arrow-up-right" as="link" variant="ghost" wire:navigate
                        href="/case-studies">
                        Case studies
                    </flux:button>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class="py-6 space-y-6 ">
            <div class="py-6 text-center">
                <flux:heading level="2" class="font-bold !text-4xl lg:!text-5xl">Led by a team of dedicated
                    people
                </flux:heading>
                <flux:subheading level="3">Whose expertice can be relied upon
                </flux:subheading>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <article>
                    <flux:card class="!p-0 relative">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-zinc-900">
                        </div>
                        <div class="absolute space-y-3 left-4 bottom-4">
                            <div>
                                <flux:heading level="3" class="!text-2xl !text-white">Bruno Rossani
                                </flux:heading>
                                <flux:subheading level="4" class="!text-white/70">Software Engineer & Web
                                    Designer</flux:subheading>
                            </div>
                            <ul class="ml-[-1.25px] flex space-x-2">
                                <li class="p-0.5">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-400 md:text-md hover:text-gray-200 hover:blur-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 size-4" fill="none"
                                            viewBox="0 0 1200 1227">
                                            <path fill="#fff"
                                                d="M714.163 519.284 1160.89 0h-105.86L667.137 450.887 357.328 0H0l468.492 681.821L0 1226.37h105.866l409.625-476.152 327.181 476.152H1200L714.137 519.284h.026ZM569.165 687.828l-47.468-67.894-377.686-540.24h162.604l304.797 435.991 47.468 67.894 396.2 566.721H892.476L569.165 687.854v-.026Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="p-0.5">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-400 md:text-md hover:text-gray-200 hover:blur-xs">
                                        <svg class="mr-2 size-4" xmlns="http://www.w3.org/2000/svg"
                                            preserveAspectRatio="xMidYMid" viewBox="0 0 256 256">
                                            <path
                                                d="M218.123 218.127h-37.931v-59.403c0-14.165-.253-32.4-19.728-32.4-19.756 0-22.779 15.434-22.779 31.369v60.43h-37.93V95.967h36.413v16.694h.51a39.907 39.907 0 0 1 35.928-19.733c38.445 0 45.533 25.288 45.533 58.186l-.016 67.013ZM56.955 79.27c-12.157.002-22.014-9.852-22.016-22.009-.002-12.157 9.851-22.014 22.008-22.016 12.157-.003 22.014 9.851 22.016 22.008A22.013 22.013 0 0 1 56.955 79.27m18.966 138.858H37.95V95.967h37.97v122.16ZM237.033.018H18.89C8.58-.098.125 8.161-.001 18.471v219.053c.122 10.315 8.576 18.582 18.89 18.474h318.144c10.336.128 18.823-8.139 18.966-18.474V18.454c-.147-10.33-8.635-18.588-18.966-18.453"
                                                fill="#FFF" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="p-0.5">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-400 md:text-md hover:text-gray-200 hover:blur-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 size-4"
                                            preserveAspectRatio="xMidYMid" viewBox="0 0 256 256">
                                            <path fill="#fff"
                                                d="M128 23.064c34.177 0 38.225.13 51.722.745 12.48.57 19.258 2.655 23.769 4.408 5.974 2.322 10.238 5.096 14.717 9.575 4.48 4.479 7.253 8.743 9.575 14.717 1.753 4.511 3.838 11.289 4.408 23.768.615 13.498.745 17.546.745 51.723 0 34.178-.13 38.226-.745 51.723-.57 12.48-2.655 19.257-4.408 23.768-2.322 5.974-5.096 10.239-9.575 14.718-4.479 4.479-8.743 7.253-14.717 9.574-4.511 1.753-11.289 3.839-23.769 4.408-13.495.616-17.543.746-51.722.746-34.18 0-38.228-.13-51.723-.746-12.48-.57-19.257-2.655-23.768-4.408-5.974-2.321-10.239-5.095-14.718-9.574-4.479-4.48-7.253-8.744-9.574-14.718-1.753-4.51-3.839-11.288-4.408-23.768-.616-13.497-.746-17.545-.746-51.723 0-34.177.13-38.225.746-51.722.57-12.48 2.655-19.258 4.408-23.769 2.321-5.974 5.095-10.238 9.574-14.717 4.48-4.48 8.744-7.253 14.718-9.575 4.51-1.753 11.288-3.838 23.768-4.408 13.497-.615 17.545-.745 51.723-.745M128 0C93.237 0 88.878.147 75.226.77c-13.625.622-22.93 2.786-31.071 5.95-8.418 3.271-15.556 7.648-22.672 14.764C14.367 28.6 9.991 35.738 6.72 44.155 3.555 52.297 1.392 61.602.77 75.226.147 88.878 0 93.237 0 128c0 34.763.147 39.122.77 52.774.622 13.625 2.785 22.93 5.95 31.071 3.27 8.417 7.647 15.556 14.763 22.672 7.116 7.116 14.254 11.492 22.672 14.763 8.142 3.165 17.446 5.328 31.07 5.95 13.653.623 18.012.77 52.775.77s39.122-.147 52.774-.77c13.624-.622 22.929-2.785 31.07-5.95 8.418-3.27 15.556-7.647 22.672-14.763 7.116-7.116 11.493-14.254 14.764-22.672 3.164-8.142 5.328-17.446 5.95-31.07.623-13.653.77-18.012.77-52.775s-.147-39.122-.77-52.774c-.622-13.624-2.786-22.929-5.95-31.07-3.271-8.418-7.648-15.556-14.764-22.672C227.4 14.368 220.262 9.99 211.845 6.72c-8.142-3.164-17.447-5.328-31.071-5.95C167.122.147 162.763 0 128 0Zm0 62.27C91.698 62.27 62.27 91.7 62.27 128c0 36.302 29.428 65.73 65.73 65.73 36.301 0 65.73-29.428 65.73-65.73 0-36.301-29.429-65.73-65.73-65.73Zm0 108.397c-23.564 0-42.667-19.103-42.667-42.667S104.436 85.333 128 85.333s42.667 19.103 42.667 42.667-19.103 42.667-42.667 42.667Zm83.686-110.994c0 8.484-6.876 15.36-15.36 15.36-8.483 0-15.36-6.876-15.36-15.36 0-8.483 6.877-15.36 15.36-15.36 8.484 0 15.36 6.877 15.36 15.36Z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <img loading="lazy" class="object-cover w-full h-[80vh] rounded-lg"
                            src="{{ asset('me.webp') }}" alt="Member 1">
                    </flux:card>
                </article>
                
                <article>
                    <flux:card class="!p-0 relative">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-zinc-900">
                        </div>
                        <div class="absolute space-y-3 left-4 bottom-4">
                            <div>
                                <flux:heading level="3" class="!text-2xl !text-white">Camila Fernández
                                </flux:heading>
                                <flux:subheading level="4" class="!text-white/70">Creative Solutions & Marketing
                                    Expert
                                </flux:subheading>
                            </div>
                            <ul class="ml-[-1.25px] flex space-x-2">
                                <li class="p-0.5">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-400 md:text-md hover:text-gray-200 hover:blur-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 size-4" fill="none"
                                            viewBox="0 0 1200 1227">
                                            <path fill="#fff"
                                                d="M714.163 519.284 1160.89 0h-105.86L667.137 450.887 357.328 0H0l468.492 681.821L0 1226.37h105.866l409.625-476.152 327.181 476.152H1200L714.137 519.284h.026ZM569.165 687.828l-47.468-67.894-377.686-540.24h162.604l304.797 435.991 47.468 67.894 396.2 566.721H892.476L569.165 687.854v-.026Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="p-0.5">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-400 md:text-md hover:text-gray-200 hover:blur-xs">
                                        <svg class="mr-2 size-4" xmlns="http://www.w3.org/2000/svg"
                                            preserveAspectRatio="xMidYMid" viewBox="0 0 256 256">
                                            <path
                                                d="M218.123 218.127h-37.931v-59.403c0-14.165-.253-32.4-19.728-32.4-19.756 0-22.779 15.434-22.779 31.369v60.43h-37.93V95.967h36.413v16.694h.51a39.907 39.907 0 0 1 35.928-19.733c38.445 0 45.533 25.288 45.533 58.186l-.016 67.013ZM56.955 79.27c-12.157.002-22.014-9.852-22.016-22.009-.002-12.157 9.851-22.014 22.008-22.016 12.157-.003 22.014 9.851 22.016 22.008A22.013 22.013 0 0 1 56.955 79.27m18.966 138.858H37.95V95.967h37.97v122.16ZM237.033.018H18.89C8.58-.098.125 8.161-.001 18.471v219.053c.122 10.315 8.576 18.582 18.89 18.474h318.144c10.336.128 18.823-8.139 18.966-18.474V18.454c-.147-10.33-8.635-18.588-18.966-18.453"
                                                fill="#FFF" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="p-0.5">
                                    <a href="#"
                                        class="inline-flex items-center text-sm text-gray-400 md:text-md hover:text-gray-200 hover:blur-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 size-4"
                                            preserveAspectRatio="xMidYMid" viewBox="0 0 256 256">
                                            <path fill="#fff"
                                                d="M128 23.064c34.177 0 38.225.13 51.722.745 12.48.57 19.258 2.655 23.769 4.408 5.974 2.322 10.238 5.096 14.717 9.575 4.48 4.479 7.253 8.743 9.575 14.717 1.753 4.511 3.838 11.289 4.408 23.768.615 13.498.745 17.546.745 51.723 0 34.178-.13 38.226-.745 51.723-.57 12.48-2.655 19.257-4.408 23.768-2.322 5.974-5.096 10.239-9.575 14.718-4.479 4.479-8.743 7.253-14.717 9.574-4.511 1.753-11.289 3.839-23.769 4.408-13.495.616-17.543.746-51.722.746-34.18 0-38.228-.13-51.723-.746-12.48-.57-19.257-2.655-23.768-4.408-5.974-2.321-10.239-5.095-14.718-9.574-4.479-4.48-7.253-8.744-9.574-14.718-1.753-4.51-3.839-11.288-4.408-23.768-.616-13.497-.746-17.545-.746-51.723 0-34.177.13-38.225.746-51.722.57-12.48 2.655-19.258 4.408-23.769 2.321-5.974 5.095-10.238 9.574-14.717 4.48-4.48 8.744-7.253 14.718-9.575 4.51-1.753 11.288-3.838 23.768-4.408 13.497-.615 17.545-.745 51.723-.745M128 0C93.237 0 88.878.147 75.226.77c-13.625.622-22.93 2.786-31.071 5.95-8.418 3.271-15.556 7.648-22.672 14.764C14.367 28.6 9.991 35.738 6.72 44.155 3.555 52.297 1.392 61.602.77 75.226.147 88.878 0 93.237 0 128c0 34.763.147 39.122.77 52.774.622 13.625 2.785 22.93 5.95 31.071 3.27 8.417 7.647 15.556 14.763 22.672 7.116 7.116 14.254 11.492 22.672 14.763 8.142 3.165 17.446 5.328 31.07 5.95 13.653.623 18.012.77 52.775.77s39.122-.147 52.774-.77c13.624-.622 22.929-2.785 31.07-5.95 8.418-3.27 15.556-7.647 22.672-14.763 7.116-7.116 11.493-14.254 14.764-22.672 3.164-8.142 5.328-17.446 5.95-31.07.623-13.653.77-18.012.77-52.775s-.147-39.122-.77-52.774c-.622-13.624-2.786-22.929-5.95-31.07-3.271-8.418-7.648-15.556-14.764-22.672C227.4 14.368 220.262 9.99 211.845 6.72c-8.142-3.164-17.447-5.328-31.071-5.95C167.122.147 162.763 0 128 0Zm0 62.27C91.698 62.27 62.27 91.7 62.27 128c0 36.302 29.428 65.73 65.73 65.73 36.301 0 65.73-29.428 65.73-65.73 0-36.301-29.429-65.73-65.73-65.73Zm0 108.397c-23.564 0-42.667-19.103-42.667-42.667S104.436 85.333 128 85.333s42.667 19.103 42.667 42.667-19.103 42.667-42.667 42.667Zm83.686-110.994c0 8.484-6.876 15.36-15.36 15.36-8.483 0-15.36-6.876-15.36-15.36 0-8.483 6.877-15.36 15.36-15.36 8.484 0 15.36 6.877 15.36 15.36Z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <img loading="lazy" class="object-cover w-full h-[80vh] rounded-lg"
                            src="{{ asset('camila_fernandez.jpg') }}" alt="Member 2">
                    </flux:card>
                </article>
            </div>

            <div class="flex justify-end">
                <flux:button icon-trailing="arrow-up-right" as="link" variant="ghost" wire:navigate
                    href="/services">
                    Our services
                </flux:button>
            </div>
        </section>

        <!-- What sets us apart -->
        <section class="py-6 mt-6 space-y-6">
            <div class="py-6 text-center">
                <flux:heading level="2" class="font-bold !text-4xl lg:!text-5xl">We don't just build websites
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

        <!-- FAQs -->
        <section class="min-h-screen py-6 mt-6 space-y-6">
            <flux:heading level="2" class="font-bold text-center !text-4xl lg:!text-5xl">Get to know us a little better
            </flux:heading>

            <div class="grid grid-cols-1 gap-8 mt-6 lg:grid-cols-3">
                <flux:card class="w-full py-6 lg:col-span-1 !bg-transparent">
                    <img loading="lazy" class="rounded-lg h-[60vh] w-full object-cover" src="{{ asset('faq.jpg') }}" alt="Accordion">
                </flux:card>

                <flux:accordion exclusive transition class="w-full py-6 lg:col-span-2">
                    <flux:accordion.item expanded>
                        <flux:accordion.heading level="3">Our story</flux:accordion.heading>
                        <flux:accordion.content>
                            We are a dynamic team of visionary strategists, creative designers, and tech-savvy
                            developers. Together, we craft digital experiences that leave a lasting impact, helping
                            our
                            clients transform their ideas into thriving digital realities.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item>
                        <flux:accordion.heading level="3">Our mission</flux:accordion.heading>
                        <flux:accordion.content>
                            Our mission is to empower businesses by providing cutting-edge digital solutions
                            tailored to
                            their unique goals. We aim to bridge the gap between innovation and accessibility,
                            enabling
                            our clients to thrive in the digital landscape.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item>
                        <flux:accordion.heading level="3">Our approach</flux:accordion.heading>
                        <flux:accordion.content>
                            At the heart of our process is a commitment to understanding your vision. We combine
                            data-driven insights, creative ingenuity, and agile methodologies to deliver solutions
                            that
                            are both impactful and sustainable.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item>
                        <flux:accordion.heading level="3">Our values</flux:accordion.heading>
                        <flux:accordion.content>
                            At the core of our agency lies a commitment to excellence, collaboration, and
                            innovation. We
                            prioritize understanding our clients' needs and delivering solutions that not only meet
                            but
                            exceed their expectations, fostering meaningful and lasting partnerships.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item>
                        <flux:accordion.heading level="3">Our specialty</flux:accordion.heading>
                        <flux:accordion.content>
                            We specialize in creating tailored digital strategies, cutting-edge web development, and
                            visually compelling designs. Our expertise lies in turning complex challenges into
                            seamless
                            solutions, ensuring your business stands out in the competitive digital world.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item>
                        <flux:accordion.heading level="3">Our vision</flux:accordion.heading>
                        <flux:accordion.content>
                            Our vision is to be a trusted global leader in digital transformation. We aspire to
                            empower
                            businesses of all sizes by providing innovative, sustainable, and impactful digital
                            solutions that drive growth and create a positive impact on the communities we serve.
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
    </flux:main>
</x-app-layout>
