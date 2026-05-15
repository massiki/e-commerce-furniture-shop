<?php

namespace App\Livewire\Components;

use App\Models\Category;
use Livewire\Component;

class UserFooter extends Component
{
    public function render()
    {
        $categories = Category::take(10)->get();
        return view('components.user-footer', compact('categories'));
    }
}
