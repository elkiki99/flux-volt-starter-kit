<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Livewire\Volt\Component;
use App\Models\User;

new class extends Component {
    use WithFileUploads;
    
    public string $name = '';
    public string $email = '';
    public $profile_picture = null;

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->profile_picture = Auth::user()->profile_picture ?? null;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'profile_picture' => ['nullable', 'image', 'max:2048'],
        ]);

        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        if ($this->profile_picture) {
            $user->profile_picture = $this->profile_picture->store('profile-pictures', 'public');
            $this->dispatch('profilePictureUpdated');
        }

        $user->save();

        Flux::toast(heading: 'Saved.', text: 'Profile information updated successfully.', variant: 'success');
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function sendVerification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        Flux::toast(heading: 'Verification link sent.', text: 'We have emailed you a verification link. Please check your email.', variant: 'success');
    }
}; ?>

<form wire:submit="updateProfileInformation" class="space-y-6">
    <flux:input label="Name" type="text" placeholder="Your name" id="name" wire:model='name' id="name" required
        autofocus autocomplete />

    <flux:field>
        <flux:label>Email</flux:label>

        <flux:input type="email" id="email" wire:model='email' placeholder="Your email" required
            autocomplete="username"></flux:input>

        <flux:error name="email" />

        @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
            <div class="flex mt-3 space-x-2">
                <flux:description>Your email address is unverified.</flux:description>
                <flux:link class="!text-sm !cursor-pointer" wire:click.prevent="sendVerification">Resend verification
                    email
                </flux:link>
            </div>
        @endif
    </flux:field>

    <flux:input type="file" wire:model='profile_picture' label="Profile picture" />

    <div class="flex justify-end">
        <flux:button variant="primary" type="submit">Save info</flux:button>
    </div>
</form>
