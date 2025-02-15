<?php

use App\Livewire\Actions\Logout;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Livewire\Attributes\{Layout, Title};
use Livewire\Attributes\Locked;
use Livewire\Volt\Component;

new 
#[Layout('layouts.guest')] #[Title('Reset password • Flux Kit')] class extends Component
{
    #[Locked]
    public string $token = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Mount the component.
     */
    public function mount(string $token): void
    {
        $this->token = $token;

        $this->email = request()->string('email');
    }

    /**
     * Reset the password for the given user.
     */
    public function resetPassword(): void
    {
        $this->validate([
            'token' => ['required'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $this->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) {
                $user->forceFill([
                    'password' => Hash::make($this->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        if ($status != Password::PASSWORD_RESET) {
            $this->addError('email', __($status));

            return;
        }

        Session::flash('status', __($status));

        $this->redirectRoute('login', navigate: true);
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
    <form wire:submit="resetPassword" class="space-y-6">
        <flux:input label="Email" type="email" placeholder="Your email address" id="email" wire:model="email"
            name="email" required autofocus autocomplete="username" />

        <flux:input label="Password" type="password" placeholder="Your password" id="password" wire:model="password"
            name="password" required autocomplete="new-password" viewable />

        <flux:input label="Confirm password" type="password" placeholder="Confirm your password"
            id="password_confirmation" wire:model="password_confirmation" name="password_confirmation" required
            autocomplete="new-password" viewable />

            <div class="space-y-2">
            <flux:button type="submit" variant="primary" class="w-full">Reset password</flux:button>

            <flux:button wire:click="logout" variant="ghost" class="w-full">Log out
            </flux:button>
        </div>
    </form>
</flux:card>
