<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public function authenticate()
    {
        $this->validate();
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'Your email or password is wrong.');
            return;
        };
        request()->session()->regenerate();
        $this->redirect(route('admin.dashboard'));
    }

    public function render()
    {
        return view('auth.login');
    }
}
