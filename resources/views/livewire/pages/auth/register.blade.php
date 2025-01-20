<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<form wire:submit="register">
    <flux:card class="space-y-6">
        <div>
            <flux:heading size="lg">Sign up</flux:heading>
            <flux:subheading>Create your account!</flux:subheading>
        </div>

        <flux:input label="Name" type="text" placeholder="Your name" id="name" wire:model="name" required />

        <flux:input label="Email" type="email" placeholder="Your email" id="email" wire:model="email" required />

        <flux:input viewable label="Password" type="password" placeholder="Your password" id="password" wire:model="password" required/>

        <flux:input viewable label="Confirm Password" type="password" placeholder="Confirm your password" id="password_confirmation" wire:model="password_confirmation" required/>

        <div class="space-y-2">
            <flux:button type="submit" variant="primary" class="w-full">Register</flux:button>

            <flux:button variant="ghost" class="w-full" href="{{ route('login') }}">Already have an account?
            </flux:button>
        </div>
    </flux:card>
</form>

