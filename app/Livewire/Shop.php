<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination;

    public string $sortBy = 'featured';

    /** @var list<int|string> */
    public array $selectedCategories = [];

    public bool $filterOnSale = false;

    public bool $filterNew = false;

    public bool $filterInStock = false;

    public function updatedSortBy(): void
    {
        $this->resetPage();
    }

    public function updatedSelectedCategories(): void
    {
        $this->resetPage();
    }

    public function updatedFilterOnSale(): void
    {
        $this->resetPage();
    }

    public function updatedFilterNew(): void
    {
        $this->resetPage();
    }

    public function updatedFilterInStock(): void
    {
        $this->resetPage();
    }

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

    public function toggleWishlist(Product $product)
    {
        $user = Auth::user();
        if (!$user) return;

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
        if (!in_array($this->sortBy, ['cheap', 'expensive', 'featured'], true)) {
            $this->sortBy = 'featured';
        }

        $products = Product::query();
        if (Auth::check()) {
            $products->with([
                'cartItems' => function ($query) {
                    $query->whereHas('cart', function ($q) {
                        $q->where('user_id', Auth::user()->id);
                    });
                },
                'wishlists' => function ($query) {
                    $query->where(
                        'user_id',
                        Auth::id()
                    );
                },
            ]);
        }

        $categoryIds = array_values(array_filter($this->selectedCategories));
        if ($categoryIds !== []) $products->whereIn('category_id', $categoryIds);
        if ($this->filterOnSale) $products->whereNotNull('sale_price')->where('sale_price', '>', 0);
        if ($this->filterNew) $products->where('created_at', '>=', now()->subDays(30));
        if ($this->filterInStock) $products->where('stock_status', 'instock')->where('quantity', '>', 0);
        match ($this->sortBy) {
            'cheap' => $products->orderByRaw('COALESCE(sale_price, regular_price) ASC'),
            'expensive' => $products->orderByRaw('COALESCE(sale_price, regular_price) DESC'),
            default => $products->orderByDesc('featured')->latest('id'),
        };

        $products = $products->paginate(9);
        $totalCatalogCount = Product::count();
        $categories = Category::all();

        return view('shop', compact('products', 'totalCatalogCount', 'categories'));
    }
}
