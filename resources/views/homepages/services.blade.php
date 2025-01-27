<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div class="space-y-3">
                <div class="text-center lg:text-start">
                    <p class="!py-0 !my-0 text-xs font-semibold text-gray-700 dark:hidden">SERVICES</p>
                    <p class="!py-0 !my-0 text-xs font-semibold hidden text-gray-300 dark:flex">SERVICES</p>
                </div>

                <!-- Desktop -->
                <div class="hidden lg:block">
                    <flux:heading class="!text-5xl font-thin">Tailored digital solutions for your<br><span
                            class="font-black"> bussiness</span></flux:heading>
                    <flux:subheading size="lg">From web development to digital marketing strategies, discover
                        how<br> we solve your unique challenges and take your <br>business to the next level.
                    </flux:subheading>
                </div>

                <!-- Mobile -->
                <div class="lg:hidden">
                    <flux:heading class="max-w-4xl mx-auto !text-5xl font-thin text-center">Tailored digital solutions
                        for
                        <span class="font-black">your bussiness</span>
                    </flux:heading>
                    <flux:subheading size="lg" class="max-w-xl mx-auto text-center">From web development to digital
                        marketing strategies, discover how we solve your unique challenges and take your business to the
                        next level.
                    </flux:subheading>
                </div>
            </div>

            <!-- Card services -->
            <div class="grid grid-cols-2 gap-4 pt-6 md:grid-cols-3 lg:grid-cols-4">
                <flux:card size="sm">
                    <flux:icon.cpu-chip variant="solid" class="mb-3" />
                    <flux:heading>System Integration</flux:heading>
                    <flux:subheading>We integrate your app with the tools you already use for a seamless
                        experience.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.credit-card variant="solid" class="mb-3" />
                    <flux:heading>Payment Methods</flux:heading>
                    <flux:subheading>We support the most popular payment methods: Stripe, Paypal, MercadoPago, you
                        name it.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.arrow-trending-up variant="solid" class="mb-3" />
                    <flux:heading>Analytics</flux:heading>
                    <flux:subheading>We track your business performance in one place.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.globe-alt variant="solid" class="mb-3" />
                    <flux:heading>Global Reach</flux:heading>
                    <flux:subheading>Expand your business with solutions tailored for a global audience, supporting
                        multiple languages and currencies.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.wrench variant="solid" class="mb-3" />
                    <flux:heading>Custom Development</flux:heading>
                    <flux:subheading>We create bespoke features and tools to fit your unique business needs and
                        goals.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.chart-bar variant="solid" class="mb-3" />
                    <flux:heading>Marketing Automation</flux:heading>
                    <flux:subheading>Streamline your campaigns with AI-driven tools that optimize your marketing
                        strategies and boost engagement.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.lock-closed variant="solid" class="mb-3" />
                    <flux:heading>Security & Compliance</flux:heading>
                    <flux:subheading>We ensure your business complies with the latest data protection and security
                        standards, keeping your customers safe.</flux:subheading>
                </flux:card>

                <flux:card size="sm">
                    <flux:icon.lifebuoy variant="solid" class="mb-3" />
                    <flux:heading>24/7 Support</flux:heading>
                    <flux:subheading>Our team is always here to assist you with any technical or operational
                        challenges you may face.</flux:subheading>
                </flux:card>
            </div>
        </div>
    </flux:main>
</x-app-layout>
