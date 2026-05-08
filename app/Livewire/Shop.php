<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Shop extends Component
{
    public function render()
    {
        $products = Product::latest('id')->paginate(12);
        $allProducts = Product::all();
        return view('shop', compact('products', 'allProducts'));
    }
}
