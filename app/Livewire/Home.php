<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $categories = Category::latest('id')->get();
        $brands = Brand::latest('id')->get();
        $newProducts = Product::latest('id')->take(8)->get();
        $featuredProducts = Product::where('featured', true)->latest('id')->get();
        $saleProducts = Product::whereNotNull('sale_price')->latest('id')->get();
        return view('home', compact('categories', 'brands', 'newProducts', 'featuredProducts', 'saleProducts'));
    }
}
