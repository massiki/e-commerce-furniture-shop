<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminNavbar extends Component
{
    public function logout()
    {
        Auth::guard('web')->logout();
        Session::invalidate();
        Session::regenerateToken();
        $this->redirect(route('login'));
    }

    public function render()
    {
        return view('components.admin-navbar');
    }
}
