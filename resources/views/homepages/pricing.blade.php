<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div class="space-y-3">
                <div class="!text-center lg:!text-start">
                    <flux:badge icon="globe-alt" color="yellow" size="sm" variant="pill">Global reach</flux:badge>
                </div>

                <flux:heading
                    class="!text-5xl md:!text-7xl font-thin max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                    You are gonna love this! Get ready <br class="hidden lg:block">for a remarkable<span
                        class="text-5xl font-black text-transparent md:text-7xl dark:from-yellow-500 dark:via-yellow-200 dark:to-yellow-600 bg-gradient-to-r from-yellow-600 via-yellow-300 to-yellow-500 bg-clip-text">
                        online presence</span></flux:heading>
                <flux:subheading
                    class="max-w-xl mx-auto text-sm text-center md:text-base lg:text-start lg:mx-0 lg:max-w-full">With
                    your bussiness and our services, you will thrive by making you<br class="hidden lg:block"> grow your
                    business and take it to the next level.
                </flux:subheading>
            </div>

            <!-- Pricing -->
            <div class="flex flex-col w-full max-w-md gap-6 py-6 mx-auto lg:flex-row lg:max-w-none lg:gap-0">
                <!-- Growth Plan -->
                <div
                    class="flex flex-col flex-1 w-full gap-2 p-2 border rounded-2xl border-zinc-200 dark:border-zinc-700/75 bg-zinc-100 dark:bg-zinc-900 lg:mt-10 lg:pr-0 lg:border-r-0 lg:rounded-r-none">

                    <flux:card class="flex flex-col h-full p-6 bg-white rounded-lg shadow-sm md:p-8 lg:rounded-r-none">
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <flux:subheading class="!text-sm">Growth Plan</flux:subheading>
                                <flux:heading class="!text-3xl">$2,990</flux:heading>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <flux:icon.fire class="text-amber-600 dark:text-amber-400" variant="solid" />
                                    <flux:heading>Monthly support</flux:heading>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle class="text-yellow-600 dark:text-yellow-400" variant="solid" />
                                    <flux:heading>Advanced website design</flux:heading>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle class="text-yellow-600 dark:text-yellow-400" variant="solid" />
                                    <flux:heading>SEO optimization</flux:heading>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle class="text-yellow-600 dark:text-yellow-400" variant="solid" />
                                    <flux:heading>Performance analytics</flux:heading>
                                </div>
                            </div>

                            <flux:button class="w-full" variant="filled" icon-trailing="chevron-right">Purchase
                            </flux:button>
                        </div>
                    </flux:card>
                </div>

                <div
                    class="flex flex-col flex-1 gap-2 p-2 border-2 border-yellow-800 rounded-2xl dark:border-yellow-200 bg-zinc-100 dark:bg-zinc-900 lg:-mb-4">

                    <!-- Premium Plan -->
                    <flux:card class="flex flex-col h-full p-6 bg-white rounded-lg shadow-sm md:p-8 lg:pb-12">
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <flux:badge icon="fire" size="sm" color="yellow" class="mb-1">Popular package
                                </flux:badge>
                                <flux:subheading class="!text-sm">Premium Plan</flux:subheading>
                                <flux:heading class="!text-3xl">$4,990</flux:heading>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <flux:icon.fire class="text-amber-600 dark:text-amber-400" variant="solid" />
                                    <flux:heading>Weekly support</flux:heading>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle class="text-yellow-600 dark:text-yellow-400" variant="solid" />
                                    <flux:heading>Custom website design</flux:heading>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle class="text-yellow-600 dark:text-yellow-400" variant="solid" />
                                    <flux:heading>eCommerce integration</flux:heading>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle class="text-yellow-600 dark:text-yellow-400" variant="solid" />
                                    <flux:heading>Marketing strategy</flux:heading>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle class="text-yellow-600 dark:text-yellow-400" variant="solid" />
                                    <flux:heading>Advanced analytics</flux:heading>
                                </div>
                            </div>

                            <flux:button class="w-full" variant="primary" icon-trailing="chevron-right">Purchase
                            </flux:button>
                        </div>
                    </flux:card>
                </div>

                <div
                    class="flex flex-col flex-1 gap-2 p-2 border rounded-2xl border-zinc-200 dark:border-zinc-700/75 bg-zinc-100 dark:bg-zinc-900 lg:mt-10 lg:rounded-l-none lg:border-l-0 lg:pl-0">

                    <!-- Elite Plan -->
                    <flux:card class="flex flex-col h-full p-6 bg-white rounded-lg shadow-sm md:p-8 lg:rounded-l-none">
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <flux:subheading class="!text-sm">Elite Plan</flux:subheading>
                                <flux:heading class="!text-3xl">$7,990</flux:heading>
                            </div>

                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <flux:icon.fire class="text-amber-600 dark:text-amber-400" variant="solid" />
                                    <flux:heading>24/7 support</flux:heading>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle class="text-yellow-600 dark:text-yellow-400" variant="solid" />
                                    <flux:heading>Comprehensive website</flux:heading>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle class="text-yellow-600 dark:text-yellow-400" variant="solid" />
                                    <flux:heading>Custom animations</flux:heading>
                                </div>

                                <div class="flex items-center gap-2">
                                    <flux:icon.check-circle class="text-yellow-600 dark:text-yellow-400" variant="solid" />
                                    <flux:heading>Lifetime support</flux:heading>
                                </div>
                            </div>

                            <flux:button class="w-full" variant="filled" icon-trailing="chevron-right">Purchase
                            </flux:button>
                        </div>
                    </flux:card>
                </div>
            </div>

            <flux:separator variant="subtle" />

            <p class="text-sm text-center">Looking for a more customized plan? <a wire:navigate href="contact"
                    class="font-semibold text-yellow-600 dark:text-yellow-400">Contact us</a></p>
        </div>
    </flux:main>
</x-app-layout>
