<x-dashboard-layout title="Dashboard • Flux Kit">
    <div class="self-stretch flex-1 space-y-8 max-lg:max-w-2xl max-lg:mx-auto">
        <div>
            <flux:heading level="1" size="xl">Good afternoon, {{ Auth::user()->name }}</flux:heading>
            <flux:subheading size="lg" class="mb-6">Here's what's new today.</flux:subheading>
        </div>

        <flux:separator variant="subtle" />
    </div>
</x-dashboard-layout>
