<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.admin')]

    public function delete(Category $category)
    {
        if ($category->image && Storage::disk('public')->exists($category->image)) {
            Storage::disk('public')->delete($category->image);
        }
        $category->delete($category->id);
        session()->flash('success', 'Category deleted successfully!');
        $this->redirect(route('admin.categories.index'), true);
    }

    public function render()
    {
        $categories = Category::latest('id')->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }
}
