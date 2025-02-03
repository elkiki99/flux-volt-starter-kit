<?php

use Livewire\Volt\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use App\Mail\ContactUs;

new class extends Component {
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

    public function contactUs()
    {
        $this->validate();

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUs(name: $this->name, email: $this->email, message: $this->message, industry: $this->industry, budget: $this->budget));

        Flux::toast(heading: 'Thanks for reaching out', text: 'We will get back to you in no time.', variant: 'success');

        $this->reset();
    }
}; ?>

<form wire:submit="contactUs" class="space-y-6">
    <div class="grid grid-cols-2 gap-x-4 gap-y-6">
        <flux:input class="flex-1 w-full" label="Name" type="text" placeholder="Your name" id="name"
            wire:model='name' required autofocus autocomplete />

        <flux:input class="flex-1 w-full" label="Email" type="email" id="email" wire:model='email'
            placeholder="Your email" required autocomplete="username"></flux:input>

        <flux:input class="flex-1 w-full" label="Company" type="text" placeholder="Your company name" id="company"
            wire:model='company' required autofocus autocomplete />

        <div class="space-y-3">
            <flux:label>Website link</flux:label>
            
            <flux:input.group>
                <flux:input.group.prefix>https://</flux:input.group.prefix>

                <flux:input class="flex-1 w-full" type="url" id="website" wire:model='website'
                    placeholder="example.com" required autocomplete="website"></flux:input>
            </flux:input.group>
        </div>

        <div class="">
            <flux:select label="Industry" wire:model="industry" placeholder="Choose industry..." variant="listbox"
                selected-suffix="industries selected" multiple>
                <flux:option selected>E-commerce</flux:option>
                <flux:option>UX/UI design</flux:option>
                <flux:option>App development</flux:option>
                <flux:option>Web development</flux:option>
                <flux:option>Backend development</flux:option>
                <flux:option>Software development</flux:option>
                <flux:option>Other</flux:option>
            </flux:select>
        </div>

        <flux:select label="Budget" wire:model="budget" placeholder="Choose budget..." variant="listbox">
            <flux:option>
                -$3k</flux:option>
            <flux:option>
                $3k - $6k</flux:option>
            <flux:option>
                $6k - $9k</flux:option>
            <flux:option>
                $9k+</flux:option>
        </flux:select>
    </div>

    <flux:textarea label="Message" wire:model='message' placeholder="Your message" required></flux:textarea>

    <div class="flex justify-end">
        <flux:button variant="filled" type="submit">Contact us</flux:button>
    </div>
</form>
