<x-app-layout>
    <x-slot name="header">
        {{-- <flux:main container>
            <div class="flex items-start max-md:flex-col">
                <div class="w-full md:w-[220px] pb-4 mr-10">
                    <flux:navlist>
                        <flux:navlist.item href="#" current>Dashboard</flux:navlist.item>
                        <flux:navlist.item href="#" badge="32">Orders</flux:navlist.item>
                        <flux:navlist.item href="#">Catalog</flux:navlist.item>
                        <flux:navlist.item href="#">Payments</flux:navlist.item>
                        <flux:navlist.item href="#">Customers</flux:navlist.item>
                        <flux:navlist.item href="#">Billing</flux:navlist.item>
                        <flux:navlist.item href="#">Quotes</flux:navlist.item>
                        <flux:navlist.item href="#">Configuration</flux:navlist.item>
                    </flux:navlist>
                </div>

                <flux:separator class="md:hidden" />

                <div class="self-stretch flex-1 max-md:pt-6">
                    <flux:heading size="xl" level="1">Good afternoon, Olivia</flux:heading>

                    <flux:subheading size="lg" class="mb-6">Here's what's new today</flux:subheading>

                    <flux:separator variant="subtle" />
                </div>
            </div>
        </flux:main> --}}
        <flux:main container>
            <flux:heading size="xl" level="1">Good afternoon, Olivia</flux:heading>

            <flux:subheading size="lg" class="mb-6">Here's what's new today</flux:subheading>

            <flux:separator variant="subtle" />
        </flux:main>
    </x-slot>
</x-app-layout>
