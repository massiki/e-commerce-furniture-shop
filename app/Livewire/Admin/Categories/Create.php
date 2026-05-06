<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    #[Layout('layouts.admin')]

    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required|mimes:jpg,jpeg,png,svg,webp|max:1024')]
    public ?TemporaryUploadedFile $image = null;

    public string $slug = '';

    public function store()
    {
        $this->validate();

        $baseSlug = Str::slug($this->name);
        $slug = $baseSlug;
        $count = 1;
        while (Category::where('slug', '=', $slug, 'and')->exists()) {
            $slug = $baseSlug . '-' . $count++;
        }
        $this->slug = $slug;

        $imagePath = $this->image->storePublicly('categories', 'public');

        Category::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $imagePath,
        ]);

        session()->flash('success', 'Category created successfully!');
        $this->redirect(route('admin.categories.index'), true);
    }

    public function render()
    {
        return view('admin.categories.create');
    }
}
