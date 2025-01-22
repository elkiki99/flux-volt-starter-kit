<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component {
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function updatePassword(): void
    {
        try {
            $validated = $this->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('current_password', 'password', 'password_confirmation');

            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');

        Flux::toast(heading: 'Password updated.', text: 'Your password has been updated successfully.', variant: 'success');
    }
}; ?>

<form wire:submit="updatePassword" class="space-y-6">
    <flux:input viewable name="current_password" type="password" autocomplete="current-password"
        wire:model="current_password" id="udpate_password_current_password" label="Current password" />

    <flux:input viewable name="password" type="password" autocomplete="new-password" wire:model="password"
        id="update_password_password" label="New password" />

    <flux:input viewable name="password_confirmation" type="password" autocomplete="new-password"
        wire:model="password_confirmation" id="update_password_password_confirmation" label="Confirm new password" />

    <div class="flex justify-end">
        <flux:button variant="primary" type="submit">Save password</flux:button>
    </div>
</form>
