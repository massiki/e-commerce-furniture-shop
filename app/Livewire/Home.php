<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $categories = Category::latest('id')->get();
        $brands = Brand::latest('id')->get();
        return view('home', compact('categories', 'brands'));
    }
}
