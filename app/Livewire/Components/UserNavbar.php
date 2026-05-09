<?php

namespace App\Livewire\Components;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserNavbar extends Component
{
    protected $listeners = ['cart-updated' => '$refresh'];

    public function render()
    {
        if (Auth::check()) {
            $countCartItems = Cart::where('user_id', Auth::id())->first()->items()->count();
        } else {
            $countCartItems = 0;
        }
        return view('components.user-navbar', compact('countCartItems'));
    }
}
