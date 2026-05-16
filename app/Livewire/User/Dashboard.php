<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public function logout()
    {
        Auth::guard('web')->logout();
        Session::invalidate();
        Session::regenerateToken();
        $this->redirect(route('login'), navigate: true);
    }

    public function render()
    {
        $orders = Auth::user()->orders()->latest()->paginate(10);
        return view('user.dashboard', compact('orders'));
    }
}
