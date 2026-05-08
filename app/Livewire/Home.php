<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $categories = Category::latest('id')->get();
        return view('home', compact('categories'));
    }
}
