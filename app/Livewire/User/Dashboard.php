<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Dashboard extends Component
{
    public function logout()
    {
        Auth::guard('web')->logout();
        Session::invalidate();
        Session::regenerateToken();
        $this->redirect(route('login'), navigate: true);
    }

    public function render()
    {
        $orders = Auth::user()->orders()->latest()->get();
        return view('user.dashboard', compact('orders'));
    }
}
