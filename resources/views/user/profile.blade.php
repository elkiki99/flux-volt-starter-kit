<x-dashboard-layout>
    <div class="self-stretch flex-1 space-y-8 max-lg:max-w-xl max-lg:mx-auto">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Profile information</flux:heading>
                <flux:subheading>Update your accounts profile info and email.Update your accounts profile info and
                    email.</flux:subheading>
            </div>

            <livewire:profile.update-profile-information-form />
        </div>

        <flux:separator variant="subtle" />

        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Update password</flux:heading>
                <flux:subheading>Ensure your account is using a long, random password to stay secure.
                </flux:subheading>
            </div>

            <livewire:profile.update-password-form />
        </div>
    </div>
</x-dashboard-layout>