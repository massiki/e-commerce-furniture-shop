<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]

    public function delete(Product $product)
    {
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        if ($product->images) {
            foreach (json_decode($product->images) as $img) {
                Storage::disk('public')->delete($img);
            }
        }
        $product->delete($product->id);
        session()->flash('success', 'Product deleted successfully!');
        $this->redirect(route('admin.products.index'), true);
    }

    public function render()
    {
        $products = Product::latest('id')->paginate(10);
        return view('admin.products.index', compact('products'));
    }
}
