<x-dashboard-layout>
    <flux:main container class="w-full max-w-4xl mx-auto px-6">
        <div class="flex items-start max-lg:flex-col">
            <livewire:layout.dashboard-sidebar />

            <div class="space-y-8 flex-1 self-stretch max-lg:pt-6 max-lg:max-w-xl max-lg:mx-auto">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Delete account</flux:heading>
                        <flux:subheading>Delete your account and all of its resources.</flux:subheading>
                    </div>

                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </flux:main>
</x-dashboard-layout>
