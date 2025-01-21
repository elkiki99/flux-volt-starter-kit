<x-dashboard-layout>
    <flux:main container>
        <div class="flex items-start max-md:flex-col">
            <livewire:layout.dashboard-sidebar />

            <flux:separator class="md:hidden" />

            <div class="self-stretch flex-1 max-md:pt-6">
                <flux:heading level="1" size="xl">Good afternoon, {{ Auth::user()->name }}</flux:heading>

                <flux:subheading size="lg" class="mb-6">Here's what's new today</flux:subheading>

                <flux:separator variant="subtle" />
            </div>
        </div>
    </flux:main>
</x-dashboard-layout>
