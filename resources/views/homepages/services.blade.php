<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <!-- Hero section -->
            <div class="space-y-3">
                <div class="!text-center lg:!text-start">
                    <flux:badge icon="light-bulb" color="yellow" size="sm" variant="pill">Innovative</flux:badge>
                </div>

                <flux:heading
                    class="!text-5xl md:!text-7xl font-thin max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                    Online solutions that resonate<br class="hidden lg:block"> with<span
                        class="!text-5xl font-black text-transparent md:!text-7xl dark:from-yellow-500 dark:via-yellow-200 dark:to-yellow-600 bg-gradient-to-r from-yellow-600 via-yellow-300 to-yellow-500 bg-clip-text">
                        your
                        bussiness</span></flux:heading>
                <flux:subheading
                    class="max-w-xl mx-auto text-sm text-center md:text-base lg:text-start lg:mx-0 lg:max-w-full">From
                    web development to digital marketing strategies, discover
                    how<br class="hidden lg:block"> we solve your unique challenges and take your <br
                        class="hidden lg:block">business to the next level.
                </flux:subheading>
            </div>

            <!-- Card services -->
            <div class="grid grid-cols-2 gap-4 py-6 md:grid-cols-3 lg:grid-cols-4">
                <flux:card size="sm" class="!bg-transparent">
                    <flux:icon.cpu-chip class="mb-3 text-yellow-600 dark:text-yellow-400" variant="solid" />
                    <flux:heading>System Integration</flux:heading>
                    <flux:subheading>We connect your app with tools you use daily, ensuring
                        a seamless and efficient experience.</flux:subheading>
                </flux:card>

                <flux:card size="sm" class="!bg-transparent">
                    <flux:icon.credit-card class="mb-3 text-yellow-600 dark:text-yellow-400" variant="solid" />
                    <flux:heading>Payment Methods</flux:heading>
                    <flux:subheading>Accept payments with Stripe, PayPal, MercadoPago,
                        and many other popular options.</flux:subheading>
                </flux:card>

                <flux:card size="sm" class="!bg-transparent">
                    <flux:icon.arrow-trending-up class="mb-3 text-yellow-600 dark:text-yellow-400" variant="solid" />
                    <flux:heading>Analytics</flux:heading>
                    <flux:subheading>Track your business performance and key metrics in
                        one convenient, centralized place.</flux:subheading>
                </flux:card>

                <flux:card size="sm" class="!bg-transparent">
                    <flux:icon.globe-alt class="mb-3 text-yellow-600 dark:text-yellow-400" variant="solid" />
                    <flux:heading>Global Reach</flux:heading>
                    <flux:subheading>Expand your business globally with multi-language
                        and multi-currency support.</flux:subheading>
                </flux:card>

                <flux:card size="sm" class="!bg-transparent">
                    <flux:icon.wrench class="mb-3 text-yellow-600 dark:text-yellow-400" variant="solid" />
                    <flux:heading>Custom Development</flux:heading>
                    <flux:subheading>We build tailored solutions to fit your business
                        needs and strategic goals.</flux:subheading>
                </flux:card>

                <flux:card size="sm" class="!bg-transparent">
                    <flux:icon.chart-bar class="mb-3 text-yellow-600 dark:text-yellow-400" variant="solid" />
                    <flux:heading>Marketing Automation</flux:heading>
                    <flux:subheading>Optimize your campaigns with AI-powered marketing
                        tools that drive engagement.</flux:subheading>
                </flux:card>

                <flux:card size="sm" class="!bg-transparent">
                    <flux:icon.lock-closed class="mb-3 text-yellow-600 dark:text-yellow-400" variant="solid" />
                    <flux:heading>Security & Compliance</flux:heading>
                    <flux:subheading>We ensure compliance with top security standards
                        to protect your data and users.</flux:subheading>
                </flux:card>

                <flux:card size="sm" class="!bg-transparent">
                    <flux:icon.lifebuoy class="mb-3 text-yellow-600 dark:text-yellow-400" variant="solid" />
                    <flux:heading>24/7 Support</flux:heading>
                    <flux:subheading>Our support team is available anytime to assist
                        with any technical challenges.</flux:subheading>
                </flux:card>
            </div>
        </div>
    </flux:main>
</x-app-layout>
