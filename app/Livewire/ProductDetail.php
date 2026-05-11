<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetail extends Component
{
    public Product $product;
    public array $allImages = [];
    public Collection $relatedProducts;

    public function mount(Product $product)
    {
        $this->product = $product->load([
            'cartItems' => function ($query) {
                $query->whereHas('cart', function ($q) {
                    $q->where('user_id', Auth::id());
                });
            },
            'wishlists' => function ($query) {
                $query->where('user_id', Auth::id());
            }
        ]);

        $this->relatedProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->inRandomOrder()->take(8)->get();

        $images = [];
        if (!empty($product->image)) {
            $images[] = $product->image;
        }
        $extraImages = json_decode($product->images ?? '[]', true) ?: [];
        foreach ($extraImages as $img) {
            if (!empty($img)) {
                $images[] = $img;
            }
        }
        $this->allImages = $images;
    }

    public function toggleCart()
    {
        if (!Auth::check()) return $this->redirect(route('login'), true);

        $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);
        $cartItem = $cart->items()->where('product_id', $this->product->id)->first();
        if ($cartItem) {
            $cartItem->delete();
        } else {
            $cart->items()->create(['product_id' => $this->product->id, 'quantity' => 1]);
        }

        // ini buat refresh relasi agar state tidak tertinggal 1 langkah
        $this->product->load([
            'cartItems' => function ($query) {
                $query->whereHas('cart', function ($q) {
                    $q->where('user_id', Auth::id());
                });
            },
            'wishlists' => function ($query) {
                $query->where('user_id', Auth::id());
            }
        ]);

        $this->dispatch('cart-updated');
    }

    public function toggleWishlist()
    {
        $user = Auth::user();
        if (!$user) return $this->redirect(route('login'), true);

        $wishlist = $user->wishlists()->where('product_id', $this->product->id)->first();
        if ($wishlist) {
            $wishlist->delete();
        } else {
            $user->wishlists()->create([
                'product_id' => $this->product->id,
            ]);
        }

        $this->product->load([
            'cartItems' => function ($query) {
                $query->whereHas('cart', function ($q) {
                    $q->where('user_id', Auth::id());
                });
            },
            'wishlists' => function ($query) {
                $query->where('user_id', Auth::id());
            }
        ]);

        $this->dispatch('wishlist-updated');
    }

    public function render()
    {
        return view('product-detail');
    }
}
