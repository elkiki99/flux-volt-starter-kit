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
