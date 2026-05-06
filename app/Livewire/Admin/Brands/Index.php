<?php

namespace App\Livewire\Admin\Brands;

use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.admin')]

    public function delete(Brand $brand)
    {
        if ($brand->image && Storage::disk('public')->exists($brand->image)) {
            Storage::disk('public')->delete($brand->image);
        }
        $brand->delete($brand->id);
        session()->flash('success', 'Brand deleted successfully!');
        $this->redirect(route('admin.brands.index'), true);
    }

    public function render()
    {
        $brands = Brand::latest('id')->paginate(10);
        return view('admin.brands.index', compact('brands'));
    }
}
