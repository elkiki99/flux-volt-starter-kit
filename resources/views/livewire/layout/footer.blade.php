<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>


<div class="container px-6 py-6 mx-auto space-y-6">
    <div class="py-0 lg:py-6">
        <div class="flex flex-col items-start justify-between gap-8 py-6 lg:items-end lg:flex-row">
            <div class="w-full space-y-6 lg:w-1/2">
                <div class="flex gap-4">
                    <x-application-logo class="text-black fill-current dark:text-white size-10" />
                    <flux:heading class="!text-4xl">{{ config('app.name') }}</flux:heading>
                </div>
                <flux:heading>Your favourite digital agency<br> for modern web applications that make real money.
                </flux:heading>
                <!-- Socials -->
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
                            <svg class="mr-2 size-4" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"
                                viewBox="0 0 256 256">
                                <path
                                    d="M218.123 218.127h-37.931v-59.403c0-14.165-.253-32.4-19.728-32.4-19.756 0-22.779 15.434-22.779 31.369v60.43h-37.93V95.967h36.413v16.694h.51a39.907 39.907 0 0 1 35.928-19.733c38.445 0 45.533 25.288 45.533 58.186l-.016 67.013ZM56.955 79.27c-12.157.002-22.014-9.852-22.016-22.009-.002-12.157 9.851-22.014 22.008-22.016 12.157-.003 22.014 9.851 22.016 22.008A22.013 22.013 0 0 1 56.955 79.27m18.966 138.858H37.95V95.967h37.97v122.16ZM237.033.018H18.89C8.58-.098.125 8.161-.001 18.471v219.053c.122 10.315 8.576 18.582 18.89 18.474h318.144c10.336.128 18.823-8.139 18.966-18.474V18.454c-.147-10.33-8.635-18.588-18.966-18.453"
                                    fill="#FFF" />
                            </svg>
                        </a>
                    </li>
                    <li class="p-0.5">
                        <a href="#"
                            class="inline-flex items-center text-sm text-gray-400 md:text-md hover:text-gray-200 hover:blur-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 size-4" preserveAspectRatio="xMidYMid"
                                viewBox="0 0 256 256">
                                <path fill="#fff"
                                    d="M128 23.064c34.177 0 38.225.13 51.722.745 12.48.57 19.258 2.655 23.769 4.408 5.974 2.322 10.238 5.096 14.717 9.575 4.48 4.479 7.253 8.743 9.575 14.717 1.753 4.511 3.838 11.289 4.408 23.768.615 13.498.745 17.546.745 51.723 0 34.178-.13 38.226-.745 51.723-.57 12.48-2.655 19.257-4.408 23.768-2.322 5.974-5.096 10.239-9.575 14.718-4.479 4.479-8.743 7.253-14.717 9.574-4.511 1.753-11.289 3.839-23.769 4.408-13.495.616-17.543.746-51.722.746-34.18 0-38.228-.13-51.723-.746-12.48-.57-19.257-2.655-23.768-4.408-5.974-2.321-10.239-5.095-14.718-9.574-4.479-4.48-7.253-8.744-9.574-14.718-1.753-4.51-3.839-11.288-4.408-23.768-.616-13.497-.746-17.545-.746-51.723 0-34.177.13-38.225.746-51.722.57-12.48 2.655-19.258 4.408-23.769 2.321-5.974 5.095-10.238 9.574-14.717 4.48-4.48 8.744-7.253 14.718-9.575 4.51-1.753 11.288-3.838 23.768-4.408 13.497-.615 17.545-.745 51.723-.745M128 0C93.237 0 88.878.147 75.226.77c-13.625.622-22.93 2.786-31.071 5.95-8.418 3.271-15.556 7.648-22.672 14.764C14.367 28.6 9.991 35.738 6.72 44.155 3.555 52.297 1.392 61.602.77 75.226.147 88.878 0 93.237 0 128c0 34.763.147 39.122.77 52.774.622 13.625 2.785 22.93 5.95 31.071 3.27 8.417 7.647 15.556 14.763 22.672 7.116 7.116 14.254 11.492 22.672 14.763 8.142 3.165 17.446 5.328 31.07 5.95 13.653.623 18.012.77 52.775.77s39.122-.147 52.774-.77c13.624-.622 22.929-2.785 31.07-5.95 8.418-3.27 15.556-7.647 22.672-14.763 7.116-7.116 11.493-14.254 14.764-22.672 3.164-8.142 5.328-17.446 5.95-31.07.623-13.653.77-18.012.77-52.775s-.147-39.122-.77-52.774c-.622-13.624-2.786-22.929-5.95-31.07-3.271-8.418-7.648-15.556-14.764-22.672C227.4 14.368 220.262 9.99 211.845 6.72c-8.142-3.164-17.447-5.328-31.071-5.95C167.122.147 162.763 0 128 0Zm0 62.27C91.698 62.27 62.27 91.7 62.27 128c0 36.302 29.428 65.73 65.73 65.73 36.301 0 65.73-29.428 65.73-65.73 0-36.301-29.429-65.73-65.73-65.73Zm0 108.397c-23.564 0-42.667-19.103-42.667-42.667S104.436 85.333 128 85.333s42.667 19.103 42.667 42.667-19.103 42.667-42.667 42.667Zm83.686-110.994c0 8.484-6.876 15.36-15.36 15.36-8.483 0-15.36-6.876-15.36-15.36 0-8.483 6.877-15.36 15.36-15.36 8.484 0 15.36 6.877 15.36 15.36Z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col w-full gap-4 text-start lg:w-1/2">
                <flux:subheading>Stay ahead in the curve! <br>Subscribe now for expert insights.
                </flux:subheading>
                <div class="flex items-center gap-4">
                    <flux:input placeholder="name@gmail.com"></flux:input>
                    <flux:button variant="subtle" icon-trailing="arrow-up-right">Subscribe</flux:button>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-between gap-8 py-6 mt-0 lg:mt-6 lg:flex-row lg:py-0">
            <div class="w-full space-y-6 lg:w-1/2">
                <div>
                    <a wire:navigate href="/pricing">
                        <flux:card
                            class="!bg-transparent hover:border-yellow-50/50 transition duration-300">
                            <flux:heading class="text-center">Our prices</flux:heading>
                            <div class="flex items-center justify-center gap-2">
                                <flux:subheading>We offer a wide range of pricing</flux:subheading>
                                <flux:icon.arrow-up-right variant="micro" />
                            </div>
                        </flux:card>
                    </a>
                </div>

                <div>
                    <a wire:navigate href="/contact">
                        <flux:card
                            class="!bg-transparent hover:border-yellow-50/50 transition duration-300">
                            <flux:heading class="text-center">Get in touch</flux:heading>
                            <div class="flex items-center justify-center gap-2">
                                <flux:subheading>Got any questions? We're here to help</flux:subheading>
                                <flux:icon.arrow-up-right variant="micro" />
                            </div>
                        </flux:card>
                    </a>
                </div>
            </div>

            <div class="flex justify-between w-full gap-4 mt-6 lg:mt-0 lg:w-1/2 text-start">
                <div class="flex flex-col gap-4">
                    <a wire:navigate href="/" class="text-zinc-800 w-fit dark:text-white">Home</a>
                    <a wire:navigate href="/about" class="text-zinc-800 w-fit dark:text-white">About</a>
                    <a wire:navigate href="/services"
                        class="text-zinc-800 w-fit dark:text-white">Services</a>
                    <a wire:navigate href="/pricing" class="text-zinc-800 w-fit dark:text-white">Pricing</a>
                    <a wire:navigate href="contact" class="text-zinc-800 w-fit dark:text-white">Contact</a>
                    <a wire:navigate href="/case-studies" class="text-zinc-800 w-fit dark:text-white">Case
                        studies</a>
                </div>

                <div class="space-y-6">
                    <div>
                        <flux:heading>Uruguay - 11:32 PM</flux:heading>
                        <flux:subheading>Isla de Flores y Salto, 11200</flux:subheading>
                    </div>
                    <div>
                        <flux:heading>Argentina - 09:32 PM</flux:heading>
                        <flux:subheading>La Pampa y Misiones, 1542</flux:subheading>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <flux:separator />

    <div class="flex flex-col items-center justify-between md:flex-row">
        <div class="flex flex-col items-center gap-4 md:flex-row max-md:gap-0">
            <flux:subheading class="text-center md:text-left">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved
            </flux:subheading>
        </div>

        <flux:subheading class="text-center md:text-right">
            <div class="flex gap-4">
                <flux:link wire:navigate href="/terms" class="text-center max-md:mb-1 !text-sm md:text-left">Terms
                    of
                    service
                </flux:link>
                <flux:link wire:navigate href="/privacy" class="text-center max-md:mb-1 !text-sm md:text-left">
                    Privacy
                    policy
                </flux:link>
            </div>
        </flux:subheading>
    </div>
</div>
