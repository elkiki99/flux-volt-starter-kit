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

    public function contactUs()
    {
        $this->validate();

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUs(name: $this->name, email: $this->email, message: $this->message, industry: $this->industry));

        Flux::toast(heading: 'Thanks for reaching out', text: 'We will get back to you in no time.', variant: 'success');

        $this->reset();
    }
}; ?>

<form wire:submit="contactUs" class="space-y-6">
    <flux:input label="Name" type="text" placeholder="Your name" id="name" wire:model='name' id="name" required
        autofocus autocomplete />

    <flux:input label="Email" type="email" id="email" wire:model='email' placeholder="Your email" required
        autocomplete="username"></flux:input>

    <flux:textarea label="Message" wire:model='message' placeholder="Your message" required></flux:textarea>

    <flux:field>
        <flux:label>Industry</flux:label>

        <flux:select wire:model='industry' placeholder="Choose industry..." variant="listbox"
            selected-suffix="industries selected" multiple>
            <flux:option>UX/UI design</flux:option>
            <flux:option>Web design</flux:option>
            <flux:option>E-commerce</flux:option>
            <flux:option>App development</flux:option>
            <flux:option>Other</flux:option>
        </flux:select>

        <flux:error name="industry"></flux:error>
    </flux:field>

    <div class="flex justify-end">
        <flux:button variant="primary" type="submit">Contact us</flux:button>
    </div>
</form>
