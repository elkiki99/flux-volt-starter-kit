<?php

use Livewire\Volt\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use App\Mail\ContactUs;

new class extends Component {
    use WithFileUploads;

    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required|lowercase|email|max:255')]
    public string $email = '';

    #[Validate('required|string|max:1000')]
    public string $message = '';

    #[Validate('required|array|min:1')]
    public array $industry = [];

    #[Validate('required|string|max:255')]
    public string $budget = '';

    #[Validate('required|string|max:255')]
    public string $company = '';

    #[Validate('nullable|string|max:255')]
    public string $website = '';

    #[Validate('nullable|file|mimes:jpg,jpeg,png,webp|max:10240')]
    public $attachment;

    #[Validate('accepted')]
    public bool $terms = false;

    public function contactUs()
    {
        $this->validate();

        $attachmentPath = $this->attachment?->store('attachments', 'public');

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUs(
            name: $this->name, 
            email: $this->email, 
            message: $this->message, 
            industry: $this->industry, 
            budget: $this->budget,
            company: $this->company,
            website: $this->website,
            attachment: $attachmentPath
        ));

        Flux::toast(heading: 'Thanks for reaching out', text: 'We will get back to you in no time.', variant: 'success');

        $this->reset();
    }
}; ?>

<form wire:submit="contactUs" class="space-y-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-6">
        <flux:input class="flex-1 w-full" label="Name" type="text" placeholder="Your name" id="name"
            wire:model='name' required autofocus autocomplete />

        <flux:input class="flex-1 w-full" label="Email" type="email" id="email" wire:model='email'
            placeholder="Your email" required autocomplete="username"></flux:input>

        <flux:input class="flex-1 w-full" label="Company" type="text" placeholder="Your company name" id="company"
            wire:model='company' required autofocus autocomplete />

        <div class="space-y-3">
            <flux:label badge="Optional">Website link</flux:label>

            <flux:input.group>
                <flux:input.group.prefix>https://</flux:input.group.prefix>

                <flux:input class="flex-1 w-full" wire:model='website'
                    placeholder="example.com"></flux:input>
            </flux:input.group>
        </div>

        <div class="">
            <flux:select label="Industry" wire:model="industry" placeholder="Choose industry..." variant="listbox"
                selected-suffix="industries selected" multiple>
                <flux:option value="E-commerce" selected>E-commerce</flux:option>
                <flux:option value="UX/UI">UX/UI design</flux:option>
                <flux:option value="App development">App development</flux:option>
                <flux:option value="Web development">Web development</flux:option>
                <flux:option value="Backend development">Backend development</flux:option>
                <flux:option value="Software development">Software development</flux:option>
                <flux:option value="Other">Other</flux:option>
            </flux:select>
        </div>

        <flux:select label="Budget" wire:model="budget" placeholder="Choose budget..." variant="listbox">
            <flux:option value="Under 3k">
                -$3k</flux:option>
            <flux:option value="3k-6k">
                $3k - $6k</flux:option>
            <flux:option value="6k-9k">
                $6k - $9k</flux:option>
            <flux:option value="Over 9k">
                $9k+</flux:option>
        </flux:select>
    </div>

    <flux:textarea label="Message" wire:model='message' placeholder="Tell us about your project" required>
    </flux:textarea>

    <div class="space-y-3">
        <flux:label badge="Optional">Attachment</flux:label>
        <flux:input type="file" wire:model="attachment" />
    </div>
    
    <flux:checkbox wire:model="terms" label="I agree to the terms and conditions" />

    <flux:button class="!w-full" variant="primary" type="submit">Contact us</flux:button>
</form>
