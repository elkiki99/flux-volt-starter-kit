<x-app-layout>
    <flux:main container>
        <section class="space-y-6">
            <div>
                <flux:heading size="xl">Contact us</flux:heading>
                <flux:subheading>Let's get in touch</flux:subheading>
            </div>

            <flux:card class="max-w-xl space-y-6">
                <livewire:contact.contact-form />
            </flux:card>
        </section>
    </flux:main>
</x-app-layout>
