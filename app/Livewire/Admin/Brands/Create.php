<?php

namespace App\Livewire\Admin\Brands;

use App\Models\Brand;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    #[Layout('layouts.admin')]

    #[Validate('required|string|max:255')]
    public string $name = '';

    public string $slug = '';

    #[Validate('required|mimes:jpg,jpeg,png,svg,webp|max:1024')]
    public ?TemporaryUploadedFile $image = null;

    public function store()
    {
        $this->validate();

        $baseSlug = Str::slug($this->name);
        $slug = $baseSlug;
        $count = 1;
        while (Brand::where('slug', '=', $slug, 'and')->exists()) {
            $slug = $baseSlug . '-' . $count++;
        }
        $this->slug = $slug;

        $imagePath = $this->image->storePublicly('brands', 'public');

        Brand::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $imagePath,
        ]);

        session()->flash('success', 'Brand created successfully!');
        $this->redirect(route('admin.brands.index'), true);
    }

    public function render()
    {
        return view('admin.brands.create');
    }
}
