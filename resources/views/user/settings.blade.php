<x-dashboard-layout>
    <flux:main container>
        <div class="flex items-start max-md:flex-col">
            <livewire:layout.dashboard-sidebar />

            <flux:separator class="md:hidden" />

            <div class="self-stretch flex-1 space-y-8 max-md:pt-6">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Delete account</flux:heading>
                        <flux:subheading>Delete your account and all of its resources.</flux:subheading>
                    </div>

                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
        </div>
    </flux:main>
</x-dashboard-layout>
