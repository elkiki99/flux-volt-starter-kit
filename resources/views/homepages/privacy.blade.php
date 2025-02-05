<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div class="space-y-6">
                <flux:heading level="1" class="!text-2xl lg:!text-4xl">Privacy Policy</flux:heading>
                <p class="text-sm">Effective date: <span class="bold">February 02, 2025</span></p>
            </div>

            <div>
                <flux:heading level="2" size="lg">1. Data collection</flux:heading>
                <flux:subheading>
                    We are committed to <span class="bold">protecting your personal data</span> and ensuring transparency about how we collect and use your information. This policy complies with applicable data protection regulations, including the <span class="bold">GDPR</span> and other relevant laws.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">2. Responsible entity</flux:heading>
                <flux:subheading>
                    The entity responsible for collecting and processing your data is <span class="bold">{{ config('app.name') }}</span>, represented by <span class="bold">John Doe</span>. We ensure compliance with applicable data protection laws and commit to keeping your data accurate, relevant, and securely processed.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">3. Data usage</flux:heading>
                <flux:subheading>
                    We collect data for <span class="bold">service provision, communication, and legal compliance</span>. This includes:
                    <ul class="pl-4 list-disc">
                        <li>Providing requested services</li>
                        <li>Improving our offerings</li>
                        <li>Sending necessary communications</li>
                        <li>Fulfilling legal obligations</li>
                    </ul>
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">4. Data sharing</flux:heading>
                <flux:subheading>
                    We do not sell or rent your data. However, we may share your information with <span class="bold">trusted third-party partners</span> who assist in service delivery, always ensuring compliance with confidentiality agreements.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">5. Data security</flux:heading>
                <flux:subheading>
                    We implement <span class="bold">security measures</span> to protect your personal data from unauthorized access, alteration, or destruction. However, no method of transmission is 100% secure, and we advise users to exercise caution online.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">6. User rights</flux:heading>
                <flux:subheading>
                    You have the right to <span class="bold">access, rectify, or delete</span> your data. You can also request restrictions on processing or object to data usage. To exercise these rights, contact us at <span class="bold">example@email.com</span>.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">7. Policy updates</flux:heading>
                <flux:subheading>
                    We reserve the right to modify this privacy policy. Updates will be posted on this page with the latest effective date.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">8. Contact information</flux:heading>
                <flux:subheading>
                    If you have any questions regarding this policy, please reach out to us at <span class="bold">{{ config('mail.from.address') }}</span>.
                </flux:subheading>
            </div>
        </div>
    </flux:main>
</x-app-layout>
