<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component {
    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: true);
    }
}; ?>

<section class="space-y-6">
    <flux:modal.trigger name="delete-account">
        <flux:button variant="danger" type="submit">Delete account</flux:button>
    </flux:modal.trigger>

    <flux:description>You're about to delete your account. Once your account is deleted, all of its resources and data
        will be permanently deleted. This action is irreversible.</flux:description>

    <flux:modal variant="flyout" position="right" name="delete-account">
        <form wire:submit="deleteUser" class="space-y-6 md:w-96">
            <div>
                <flux:heading size="lg">Delete account?</flux:heading>
                <flux:subheading>Please
                    enter your password to confirm you would like to permanently delete your account.</flux:subheading>
            </div>

            <flux:field>
                <flux:input name="password" type="password" id="password" placeholder="Your password"
                    wire:model="password" />
                <flux:error name="password" />
            </flux:field>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>

                <flux:button type="submit" variant="danger">Delete account</flux:button>
            </div>
        </form>
    </flux:modal>
</section>
