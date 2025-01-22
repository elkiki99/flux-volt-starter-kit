<x-dashboard-layout>
    <div class="self-stretch flex-1 space-y-8 max-lg:max-w-xl max-lg:mx-auto">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Delete account</flux:heading>
                <flux:subheading>Delete your account and all of its resources.</flux:subheading>
            </div>

            <livewire:profile.delete-user-form />
        </div>
    </div>
</x-dashboard-layout>
