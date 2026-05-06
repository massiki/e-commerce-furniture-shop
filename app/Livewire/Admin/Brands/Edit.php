<?php

namespace App\Livewire\Admin\Brands;

use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Edit extends Component
{
    use WithFileUploads;

    #[Layout('layouts.admin')]

    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('nullable|mimes:jpg,jpeg,png,svg,webp|max:1024')]
    public ?TemporaryUploadedFile $image = null;

    public string $slug = '';
    public string $oldImage = '';

    public Brand $brand;

    public function mount(Brand $brand)
    {
        $this->brand = $brand;
        $this->name = $brand->name;
        $this->oldImage = $brand->image;
    }

    public function update()
    {
        $this->validate();

        $baseSlug = Str::slug($this->name);
        $slug = $baseSlug;
        $count = 1;
        while (Brand::where('slug', '=', $slug, 'and')->exists()) {
            $slug = $baseSlug . '-' . $count++;
        }
        $this->slug = $slug;

        if ($this->image) {
            if ($this->brand->image && Storage::disk('public')->exists($this->brand->image)) {
                Storage::disk('public')->delete($this->brand->image);
            }
            $imagePath = $this->image->storePublicly('brands', 'public');
        } else {
            $imagePath = $this->brand->image;
        }

        $this->brand->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $imagePath,
        ]);

        session()->flash('success', 'Brand updated successfully!');
        $this->redirect(route('admin.brands.index'), true);
    }

    public function render()
    {
        return view('admin.brands.edit');
    }
}
