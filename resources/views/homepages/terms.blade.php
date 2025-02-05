<x-app-layout>
    <flux:main container>
        <div class="space-y-6">
            <div class="space-y-6">
                <flux:heading level="1" class="!text-2xl lg:!text-4xl">Terms of service and project agreement</flux:heading>
                <p class="text-sm">Effective date: <span class="bold">February 02, 2025</span></p>
            </div>

            <div>
                <flux:heading level="2" size="lg">1. Introduction</flux:heading>
                <flux:subheading>
                    This document outlines the terms of service and project agreement for <span class="bold">{{ config('app.name') }}</span>, a digital agency specializing in web design and related services.
                    By engaging with our services, you agree to be bound by these terms. If you are entering into this agreement on behalf of a company or other legal entity, you confirm that you have the authority to bind that entity.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">2. Scope of services</flux:heading>
                <flux:subheading>
                    <span class="bold">{{ config('app.name') }}</span> offers comprehensive digital solutions including custom website design, development, SEO optimization, and ongoing maintenance. The services provided will be clearly defined in your specific project agreement.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">3. Project engagement options</flux:heading>
                <flux:subheading>
                    We offer different types of project engagements to suit your needs:
                    <br /><br />
                    <span class="bold dark:text-white text-zinc-800">3.1. Single Project engagement</span>
                    <br /><br />
                    <span class="bold">You can:</span>
                    <ul class="pl-4 list-disc">
                        <li>Commission a complete custom website design and development.</li>
                        <li>Request modifications and enhancements during the project lifecycle.</li>
                        <li>Receive dedicated support until project completion.</li>
                    </ul>
                    <br />
                    <span class="bold">You cannot:</span>
                    <ul class="pl-4 list-disc">
                        <li>Reuse project deliverables for multiple independent projects under the same agreement.</li>
                        <li>Transfer project rights to third parties without our written consent.</li>
                    </ul>
                    <br />
                    <span class="bold dark:text-white text-zinc-800">3.2. Retainer engagement</span>
                    <br /><br />
                    <span class="bold">You can:</span>
                    <ul class="pl-4 list-disc">
                        <li>Receive continuous website maintenance, updates, and digital strategy support.</li>
                        <li>Request minor modifications and enhancements on an ongoing basis.</li>
                    </ul>
                    <br />
                    <span class="bold">You cannot:</span>
                    <ul class="pl-4 list-disc">
                        <li>Cancel the retainer without adhering to the agreed notice period.</li>
                        <li>Expect deliverables outside the scope defined in the retainer agreement.</li>
                    </ul>
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">4. Client responsibilities</flux:heading>
                <flux:subheading>
                    To ensure a successful project outcome, you agree to:
                    <ul class="pl-4 list-disc">
                        <li>Provide timely feedback, necessary materials, and access to resources.</li>
                        <li>Communicate any changes in project scope promptly.</li>
                        <li>Adhere to agreed payment schedules.</li>
                    </ul>
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">5. Intellectual property</flux:heading>
                <flux:subheading>
                    All intellectual property created by <span class="bold">{{ config('app.name') }}</span> during the project remains our property until full payment is received.
                    Upon full payment, you are granted a non-exclusive, royalty-free license to use the deliverables for the intended purpose.
                    <br /><br />
                    <span class="bold">You cannot:</span>
                    <ul class="pl-4 list-disc">
                        <li>Resell or redistribute our deliverables without explicit permission.</li>
                        <li>Claim ownership of our proprietary designs or code.</li>
                    </ul>
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">6. Payment terms</flux:heading>
                <flux:subheading>
                    Payments are due as outlined in your project agreement. For single project engagements, payments are structured around milestones.
                    For retainer engagements, payments are made on a regular schedule as agreed upon. Late payments may incur additional charges.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">7. Limitation of liability</flux:heading>
                <flux:subheading>
                    <span class="bold">{{ config('app.name') }}</span> shall not be liable for any indirect, incidental, or consequential damages arising from the use of our services.
                    Our total liability is limited to the amount paid under the specific project engagement.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">8. Governing law</flux:heading>
                <flux:subheading>
                    These Terms are governed by the laws of <span class="bold">Uruguay</span>.
                    Any disputes shall be resolved in the appropriate courts of <span class="bold">Uruguay</span>.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">9. Changes to terms</flux:heading>
                <flux:subheading>
                    We reserve the right to modify these Terms at any time. Any significant changes will be communicated on our website or via your provided contact information.
                </flux:subheading>
            </div>

            <div>
                <flux:heading level="2" size="lg">10. Contact</flux:heading>
                <flux:subheading>
                    If you have any questions regarding these Terms, please contact us at <span class="bold">{{ config('mail.from.address') }}</span>.
                </flux:subheading>
            </div>
        </div>
    </flux:main>
</x-app-layout>