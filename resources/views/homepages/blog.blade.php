<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div>
                <flux:heading size="xl">Our blog</flux:heading>
                <flux:subheading size="lg">Find out what's new on our blog.</flux:subheading>
            </div>

            <div class="grid grid-cols-3">
                {{-- @forelse ($posts as $post) --}}
                <div class="space-y-3">
                    <a href="#" class="relative group">
                        <img class="transition-all duration-500 rounded-lg group-hover:brightness-75" loading="lazy"
                            src="{{ asset('php.jpg') }}" alt="Blog post image">
                    </a>

                    <div class="flex justify-between">
                        <div class="space-y-3">
                            <flux:badge inset="top bottom" size="sm" variant="pill">Category</flux:badge>
                            <div>
                                <flux:heading size="lg">How to use Flux Volt</flux:heading>
                                <flux:subheading size="md">Learn how to use Flux Volt in this in-depth tutorial.
                                </flux:subheading>
                            </div>
                        </div>

                        <flux:button href="#" variant="ghost" icon-trailing="arrow-up-right"></flux:button>
                    </div>
                </div>
                {{-- @empty
                <p class="text-gray-500">No blog posts found.</p>
                @endforelse --}}
            </div>
        </div>
    </flux:main>
</x-app-layout>
