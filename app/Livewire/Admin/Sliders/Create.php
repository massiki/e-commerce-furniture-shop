<?php

namespace App\Livewire\Admin\Sliders;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    #[Layout('layouts.admin')]

    public string $title;
    public string $tagline;
    public string $link;
    public ?TemporaryUploadedFile $image = null;

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'link' => 'required|url|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function store()
    {
        $validated = $this->validate();

        $imagePath = $this->image->store('sliders', 'public');

        Slider::create([
            'title' => $validated['title'],
            'tagline' => $validated['tagline'],
            'link' => $validated['link'],
            'image' => $imagePath,
        ]);

        session()->flash('success', 'Slider created successfully!');
        return redirect()->route('admin.sliders.index');
    }

    public function render()
    {
        return view('admin.sliders.create');
    }
}
