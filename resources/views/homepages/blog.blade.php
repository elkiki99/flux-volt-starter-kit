<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div>
                <flux:heading size="xl">Our blog</flux:heading>
                <flux:subheading size="lg">Find out what's new on our blog.</flux:subheading>
            </div>

            <flux:separator variant="subtle" />

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                {{-- @forelse ($posts as $post) --}}
                <div class="space-y-1">
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
                </div>
                {{-- </div> --}}

                {{-- @empty
                <p class="text-gray-500">No blog posts found.</p>
                @endforelse --}}
            </div>
        </div>
    </flux:main>
</x-app-layout>
