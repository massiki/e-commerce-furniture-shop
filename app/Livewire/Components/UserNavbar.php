<?php

namespace App\Livewire\Components;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserNavbar extends Component
{
    protected $listeners = [
        'cart-updated' => '$refresh',
        'wishlist-updated' => '$refresh'
    ];

    public function render()
    {
        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())->first();
            $countCartItems = $cart ? $cart->items()->count() : 0;
            $countWishlists = Auth::user()->wishlists()->count();
        } else {
            $countCartItems = 0;
            $countWishlists = 0;
        }
        return view('components.user-navbar', compact('countCartItems', 'countWishlists'));
    }
}
