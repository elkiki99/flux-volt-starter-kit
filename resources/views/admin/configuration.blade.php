<x-admin-panel-layout>
    <div class="self-stretch flex-1 space-y-8 max-lg:max-w-2xl max-lg:mx-auto">
        <div>
            <flux:heading level="1" size="xl">Configuration</flux:heading>
            <flux:subheading size="lg">Manage configuration.</flux:subheading>
        </div>

        <flux:separator variant="subtle" />

        <div class="max-w-2xl space-y-6">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Profile information</flux:heading>
                    <flux:subheading>Update your accounts profile info and email. Update your accounts profile info and
                        email.</flux:subheading>
                </div>

                <livewire:profile.update-profile-information-form />
            </div>

            <flux:separator variant="subtle" />

            <div class="">
                <livewire:profile.update-profile-information-form />
            </div>

            <flux:separator variant="subtle" />

            <div class="">
                <livewire:profile.update-password-form />
            </div>
        </div>
    </div>
</x-admin-panel-layout>
