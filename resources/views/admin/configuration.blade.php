<x-admin-panel-layout>
    <div class="self-stretch flex-1 space-y-8 max-lg:max-w-xl max-lg:mx-auto">
        <div class="">
            <flux:heading level="1" size="xl">Configuration</flux:heading>
            <flux:subheading size="lg">Manage configuration.</flux:subheading>
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
</x-admin-panel-layout>
