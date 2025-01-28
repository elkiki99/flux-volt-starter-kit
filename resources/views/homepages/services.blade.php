<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <!-- Hero section -->
            <div class="space-y-3">
                <div class="!text-center lg:!text-start">
                    <p class="text-xs font-semibold text-gray-700 dark:hidden">SERVICES</p>
                    <p class="hidden text-xs font-semibold text-gray-300 dark:block">SERVICES</p>
                </div>

                <flux:heading
                    class="!text-4xl md:!text-5xl font-thin max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                    Online solutions that resonate<br class="hidden lg:block"> with<span class="font-black text-teal-600 dark:text-teal-400"> your
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
                <flux:card size="sm">
                    <flux:icon.cpu-chip class="mb-3 text-teal-600 dark:text-teal-400" variant="solid" />
                    <flux:heading>System Integration</flux:heading>
                    <flux:subheading>We integrate your app with the tools you already use for a seamless
                        experience.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.credit-card class="mb-3 text-teal-600 dark:text-teal-400" variant="solid" />
                    <flux:heading>Payment Methods</flux:heading>
                    <flux:subheading>We support the most popular payment methods: Stripe, Paypal, MercadoPago, you
                        name it.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.arrow-trending-up class="mb-3 text-teal-600 dark:text-teal-400" variant="solid" />
                    <flux:heading>Analytics</flux:heading>
                    <flux:subheading>We track your business performance in one place.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.globe-alt class="mb-3 text-teal-600 dark:text-teal-400" variant="solid" />
                    <flux:heading>Global Reach</flux:heading>
                    <flux:subheading>Expand your business with solutions tailored for a global audience, supporting
                        multiple languages and currencies.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.wrench class="mb-3 text-teal-600 dark:text-teal-400" variant="solid" />
                    <flux:heading>Custom Development</flux:heading>
                    <flux:subheading>We create bespoke features and tools to fit your unique business needs and
                        goals.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.chart-bar class="mb-3 text-teal-600 dark:text-teal-400" variant="solid" />
                    <flux:heading>Marketing Automation</flux:heading>
                    <flux:subheading>Streamline your campaigns with AI-driven tools that optimize your marketing
                        strategies and boost engagement.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.lock-closed class="mb-3 text-teal-600 dark:text-teal-400" variant="solid" />
                    <flux:heading>Security & Compliance</flux:heading>
                    <flux:subheading>We ensure your business complies with the latest data protection and security
                        standards, keeping your customers safe.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.lifebuoy class="mb-3 text-teal-600 dark:text-teal-400" variant="solid" />
                    <flux:heading>24/7 Support</flux:heading>
                    <flux:subheading>Our team is always here to assist you with any technical or operational
                        challenges you may face.</flux:subheading>
                </flux:card>
            </div>
        </div>
    </flux:main>
</x-app-layout>
