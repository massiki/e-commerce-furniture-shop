<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Shop extends Component
{
    public function toggleCart(Product $product)
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);
        $cartItem = $cart->items()->where('product_id', $product->id)->first();
        if ($cartItem) {
            $cartItem->delete();
        } else {
            $cart->items()->create(['product_id' => $product->id, 'quantity' => 1]);
        }
        $this->dispatch('cart-updated');
    }

    public function render()
    {
        $products = Product::query();
        if (Auth::check()) {
            $products->with(['cartItems' => function ($query) {
                $query->whereHas('cart', function ($q) {
                    $q->where('user_id', Auth::user()->id);
                });
            }]);
        }
        $products = $products
            ->latest('id')
            ->paginate(12);

        $allProducts = Product::all();
        return view('shop', compact('products', 'allProducts'));
    }
}
