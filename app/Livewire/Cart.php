<?php

namespace App\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public function increment(CartItem $cartItems)
    {
        $cartItems->quantity += 1;
        $cartItems->save();
    }

    public function decrement(CartItem $cartItems)
    {
        if ($cartItems->quantity <= 1) return;
        $cartItems->quantity -= 1;
        $cartItems->save();
    }

    public function remove(CartItem $cartItems)
    {
        $cartItems->delete();
        $this->dispatch('cart-updated');
    }

    public function clear()
    {
        $cart = ModelsCart::where('user_id', Auth::id())->first();
        if ($cart) {
            $cart->items()->delete();
        }
        $this->dispatch('cart-updated');
    }

    public function render()
    {
        $cart = ModelsCart::firstOrCreate(['user_id' => Auth::user()->id]);
        $cartItems = $cart->items()->latest('id')->get();
        return view('cart', compact('cartItems'));
    }
}
