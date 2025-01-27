<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div class="space-y-3">
                <div class="text-center lg:text-start">
                    <p class="!py-0 !my-0 text-xs font-semibold text-gray-700 dark:hidden">ABOUT US</p>
                    <p class="!py-0 !my-0 text-xs font-semibold hidden text-gray-300 dark:flex">ABOUT US</p>
                </div>

                <!-- Desktop -->
                <div class="hidden lg:block">
                    <flux:heading class="!text-5xl font-thin">Turning your ideas into <span class="font-black">digital<br>
                            success</span></flux:heading>
                    <flux:subheading size="lg">Meet the team behind our innovative digital solutions.
                        Our passion is <br>helping your business grow with tailored strategies <br>and a personalized
                        approach.
                    </flux:subheading>
                </div>

                <!-- Mobile -->
                <div class="lg:hidden">
                    <flux:heading class="max-w-4xl mx-auto !text-5xl font-thin text-center">Turning your ideas into<span
                            class="font-black"> digital success</span></flux:heading>
                    <flux:subheading size="lg" class="max-w-xl mx-auto text-center">Meet the team behind our
                        innovative digital solutions.
                        Our passion is helping your business grow with tailored strategies and a personalized approach.
                    </flux:subheading>
                </div>
            </div>

            <!-- FAQs -->
            {{-- <div class="gap-4 pt-6 lg:flex"> --}}
            <flux:accordion exclusive {{-- class="lg:w-1/2" --}} class="max-w-3xl mt-6">
                <flux:accordion.item expanded transition heading="Our story">
                    We are a dynamic team of visionary strategists, creative designers, and tech-savvy
                    developers.
                    Together, we craft digital experiences that leave a lasting impact, helping our clients
                    transform
                    their ideas into thriving digital realities.
                </flux:accordion.item>
                <flux:accordion.item transition heading="Our mission">
                    Our mission is to empower businesses by providing cutting-edge digital solutions tailored to
                    their
                    unique goals. We aim to bridge the gap between innovation and accessibility, enabling our
                    clients to
                    thrive in the digital landscape.
                </flux:accordion.item>
                <flux:accordion.item transition heading="Our approach">
                    At the heart of our process is a commitment to understanding your vision. We combine
                    data-driven insights, creative ingenuity, and agile methodologies to deliver solutions that
                    are both impactful and sustainable.
                </flux:accordion.item>

                {{-- <flux:separator variant="subtle" class="!shadow-none lg:hidden" />
                </flux:accordion> --}}

                {{-- <flux:accordion exclusive class="mt-4 lg:w-1/2 lg:mt-0"> --}}
                <flux:accordion.item transition heading="Our values">
                    At the core of our agency lies a commitment to excellence, collaboration, and innovation. We
                    prioritize understanding our clients' needs and delivering solutions that not only meet but
                    exceed
                    their expectations, fostering meaningful and lasting partnerships.
                </flux:accordion.item>
                <flux:accordion.item transition heading="Our specialty">
                    We specialize in creating tailored digital strategies, cutting-edge web development, and
                    visually
                    compelling designs. Our expertise lies in turning complex challenges into seamless
                    solutions,
                    ensuring your business stands out in the competitive digital world.
                </flux:accordion.item>
                <!-- Same accorion with responsive expantion -->
                <flux:accordion.item {{-- class="hidden lg:block" expanded  --}} transition heading="Our vision">
                    Our vision is to be a trusted global leader in digital transformation. We aspire to empower
                    businesses of all sizes by providing innovative, sustainable, and impactful digital
                    solutions that drive growth and create a positive impact on the communities we serve.
                </flux:accordion.item>
                {{-- <flux:accordion.item class="lg:hidden" transition heading="Our vision">
                        Our vision is to be a trusted global leader in digital transformation. We aspire to empower
                        businesses of all sizes by providing innovative, sustainable, and impactful digital
                        solutions that drive growth and create a positive impact on the communities we serve.
                    </flux:accordion.item> --}}
            </flux:accordion>
        </div>
    </flux:main>
</x-app-layout>
