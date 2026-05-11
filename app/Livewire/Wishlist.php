<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist as ModelsWishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Wishlist extends Component
{
    public function addToCart(Product $product)
    {
        $user = Auth::user();
        if (!$user) return;

        $cart = Cart::firstOrCreate(['user_id' => $user->id]);
        $cartItem = $cart->items()->where('product_id', $product->id)->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => 1,
            ]);
        }

        $this->dispatch('cart-updated');
        $this->dispatch('wishlist-updated');
    }

    public function remove(ModelsWishlist $wishlists)
    {
        $wishlists->delete();
        $this->dispatch('wishlist-updated');
    }

    public function render()
    {
        $wishlists = ModelsWishlist::where('user_id', Auth::id())->latest('id')->get();
        return view('wishlist', compact('wishlists'));
    }
}
