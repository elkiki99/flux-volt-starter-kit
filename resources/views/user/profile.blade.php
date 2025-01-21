<x-dashboard-layout>
    <flux:main container>
        <div class="flex items-start max-md:flex-col">
            <livewire:layout.dashboard-sidebar />

            <flux:separator class="md:hidden" />

            <div class="space-y-8 max-md:pt-6">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Profile information</flux:heading>
                        <flux:subheading>Update your accounts profile info and email.</flux:subheading>
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
