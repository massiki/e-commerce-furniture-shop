<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public function toggleCart(Product $product)
    {
        if (!Auth::check()) return $this->redirect(route('login'), true);
        $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);
        $cartItem = $cart->items()->where('product_id', $product->id)->first();
        if ($cartItem) {
            $cartItem->delete();
        } else {
            $cart->items()->create(['product_id' => $product->id, 'quantity' => 1]);
        }
        $this->dispatch('cart-updated');
    }

    public function toggleWishlist(Product $product)
    {
        $user = Auth::user();
        if (!$user) return $this->redirect(route('login'), true);

        $wishlist = $user->wishlists()->where('product_id', $product->id)->first();
        if ($wishlist) {
            $wishlist->delete();
        } else {
            $user->wishlists()->create([
                'product_id' => $product->id,
            ]);
        }
        $this->dispatch('wishlist-updated');
    }

    public function render()
    {
        $product = Product::query();
        if (Auth::check()) {
            $product->with(['cartItems' => function ($query) {
                $query->whereHas('cart', function ($q) {
                    $q->where('user_id', Auth::user()->id);
                });
            }, 'wishlists' => function ($query) {
                $query->where('user_id', Auth::id());
            }]);
        }
        $newProducts = $product->latest('id')->take(8)->get();
        $featuredProducts = $product->where('featured', true)->latest('id')->get();
        $saleProducts = Product::whereNotNull('sale_price')->latest('id')->get();

        $categories = Category::latest('id')->get();
        $brands = Brand::latest('id')->get();
        $sliders = Slider::latest('id')->get();
        return view('home', compact('categories', 'brands', 'newProducts', 'featuredProducts', 'saleProducts', 'sliders'));
    }
}
