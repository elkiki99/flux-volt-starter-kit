<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\{Layout, Title};
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] #[Title('Confirm password • Flux Kit')] class extends Component {
    public string $password = '';

    /**
     * Confirm the current user's password.
     */
    public function confirmPassword(): void
    {
        $this->validate([
            'password' => ['required', 'string'],
        ]);

        if (
            !Auth::guard('web')->validate([
                'email' => Auth::user()->email,
                'password' => $this->password,
            ])
        ) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        session(['auth.password_confirmed_at' => time()]);

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<flux:card>
    <form wire:submit="confirmPassword" class="space-y-6">
        <div>
            <flux:heading size="lg">This is a secure area of the application</flux:heading>
            <flux:subheading>Please confirm your password before continuing.</flux:subheading>
        </div>

        <flux:input label="Password" type="password" wire:model='password' name="password" required
            autocomplete="current-password" />

        <div class="space-y-2">
            <flux:button variant="primary" type="submit" class="w-full">Confirm password</flux:button>

            <flux:button wire:click="logout" variant="ghost" class="w-full">Log out
            </flux:button>
        </div>
    </form>
</flux:card>
