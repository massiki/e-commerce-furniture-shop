<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

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

    public Category $category;

    public function mount(Category $category)
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->oldImage = $category->image;
    }

    public function update()
    {
        $this->validate();

        $baseSlug = Str::slug($this->name);
        $slug = $baseSlug;
        $count = 1;
        while (Category::where('slug', '=', $slug, 'and')->exists()) {
            $slug = $baseSlug . '-' . $count++;
        }
        $this->slug = $slug;

        if ($this->image) {
            if ($this->category->image && Storage::disk('public')->exists($this->category->image)) {
                Storage::disk('public')->delete($this->category->image);
            }
            $imagePath = $this->image->storePublicly('categories', 'public');
        } else {
            $imagePath = $this->category->image;
        }

        $this->category->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $imagePath,
        ]);

        session()->flash('success', 'Category updated successfully!');
        $this->redirect(route('admin.categories.index'), true);
    }

    public function render()
    {
        return view('admin.categories.edit');
    }
}
