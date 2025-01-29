<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <!-- Hero section -->
            <div class="space-y-3">
                <div class="!text-center lg:!text-start">
                    <p class="text-xs font-semibold text-gray-700 dark:hidden">ABOUT US</p>
                    <p class="hidden text-xs font-semibold text-gray-300 dark:block">ABOUT US</p>
                </div>

                <flux:heading
                    class="!text-4xl md:!text-5xl font-thin max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                    Turning your creative ideas into<br class="hidden lg:block">dominant <span
                        class="text-4xl font-black text-transparent md:text-5xl dark:from-teal-500 dark:via-teal-300 dark:to-teal-600 bg-gradient-to-r from-teal-600 via-teal-300 to-teal-500 bg-clip-text">digital
                        success</span></flux:heading>
                <flux:subheading
                    class="max-w-xl mx-auto text-sm text-center md:text-base lg:text-start lg:mx-0 lg:max-w-full">Meet
                    the team behind our innovative digital solutions.
                    Our passion is <br class="hidden lg:block">helping your business grow with tailored strategies
                    <br class="hidden lg:block">and a personalized
                    approach.
                </flux:subheading>
            </div>

            <!-- FAQs -->
            <flux:accordion class="max-w-3xl py-6 mx-auto mt-6 lg:mx-none lg:max-w-full">
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
                <flux:accordion.item transition heading="Our vision">
                    Our vision is to be a trusted global leader in digital transformation. We aspire to empower
                    businesses of all sizes by providing innovative, sustainable, and impactful digital
                    solutions that drive growth and create a positive impact on the communities we serve.
                </flux:accordion.item>
            </flux:accordion>
        </div>
    </flux:main>
</x-app-layout>
