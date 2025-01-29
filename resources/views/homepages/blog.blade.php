<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div class="space-y-3">
                <div class="!text-center lg:!text-start">
                    <p class="text-xs font-semibold text-gray-700 dark:hidden">BLOG</p>
                    <p class="hidden text-xs font-semibold text-gray-300 dark:block">BLOG</p>
                </div>

                <flux:heading
                    class="!text-4xl md:!text-5xl font-thin max-w-4xl mx-auto lg:mx-0 lg:max-w-full text-center lg:text-start">
                    Whats up in the world of digital marketing <br class="hidden lg:block">and
                    <span
                        class="text-4xl font-black text-transparent md:text-5xl dark:from-teal-500 dark:via-teal-200 dark:to-teal-600 bg-gradient-to-r from-teal-600 via-teal-300 to-teal-500 bg-clip-text">
                        online presence</span>
                </flux:heading>
                <flux:subheading
                    class="max-w-xl mx-auto text-sm text-center md:text-base lg:text-start lg:mx-0 lg:max-w-full">With
                    your bussiness and our services, you will thrive by making you<br class="hidden lg:block"> grow your
                    business and take it to the next level.
                </flux:subheading>
            </div>

            <flux:separator variant="subtle" />

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                {{-- @forelse ($posts as $post) --}}
                <article class="space-y-1">
                    <a href="#" class="relative group">
                        <img class="transition-all duration-500 rounded-lg group-hover:brightness-75" loading="lazy"
                            src="{{ asset('php.jpg') }}" alt="Blog post image">
                    </a>

                    <!-- Flex container for badge and button -->
                    <div class="flex items-center justify-between">
                        <flux:badge size="sm" variant="pill">Category</flux:badge>
                        <flux:button href="#" variant="ghost" icon-trailing="arrow-up-right"></flux:button>
                    </div>

                    <div>
                        <flux:heading size="lg">How to use Flux Volt</flux:heading>
                        <flux:subheading size="md">Learn how to use Flux Volt in this in-depth tutorial.
                        </flux:subheading>
                    </div>
                </article>
                {{-- </div> --}}

                {{-- @empty
                <p class="text-gray-500">No blog posts found.</p>
                @endforelse --}}
            </div>
        </div>
    </flux:main>
</x-app-layout>
