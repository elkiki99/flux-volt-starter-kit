<x-dashboard-layout>
    <flux:main container class="w-full max-w-4xl mx-auto px-6">
        <div class="flex items-start max-lg:flex-col">
            <livewire:layout.dashboard-sidebar />

            <div class="space-y-8 flex-1 self-stretch max-lg:pt-6 max-lg:max-w-xl max-lg:mx-auto">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Profile information</flux:heading>
                        <flux:subheading>Update your accounts profile info and email.Update your accounts profile info and email.</flux:subheading>
                    </div>

                    <livewire:profile.update-profile-information-form />
                </div>

                <flux:separator />

                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Update password</flux:heading>
                        <flux:subheading>Ensure your account is using a long, random password to stay secure.
                        </flux:subheading>
                    </div>

                    <livewire:profile.update-password-form />
                </div>
            </div>
        </div>
    </flux:main>
</x-dashboard-layout>
