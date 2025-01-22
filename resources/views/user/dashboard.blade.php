<x-dashboard-layout>
    <flux:main container class="w-full max-w-4xl mx-auto px-6">
        <div class="flex items-start max-lg:flex-col">
            <livewire:layout.dashboard-sidebar />

            <div class="space-y-8 flex-1 self-stretch max-lg:pt-6 max-lg:max-w-xl max-lg:mx-auto">
                <flux:heading level="1" size="xl">Good afternoon, {{ Auth::user()->name }}</flux:heading>

                <flux:subheading size="lg" class="mb-6">Here's what's new today.</flux:subheading>

                <flux:separator variant="subtle" />
            </div>
        </div>
    </flux:main>
</x-dashboard-layout>
