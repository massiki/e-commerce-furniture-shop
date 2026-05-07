<?php

namespace App\Livewire\Admin\Sliders;

use App\Models\Coupon;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    #[Layout('layouts.admin')]

    public string $title;
    public string $tagline;
    public string $link;
    public ?TemporaryUploadedFile $image = null;

    public string $oldImage;

    public Slider $slider;

    public function mount(Slider $slider)
    {
        $this->title = $slider->title;
        $this->tagline = $slider->tagline;
        $this->link = $slider->link;
        $this->oldImage = $slider->image;
    }

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'link' => 'required|url|max:255',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function update()
    {
        $validated = $this->validate();

        if ($this->image) {
            if ($this->slider->image && Storage::disk('public')->exists($this->slider->image)) {
                Storage::disk('public')->delete($this->slider->image);
            }
            $imagePath = $this->image->storePublicly('sliders', 'public');
        } else {
            $imagePath = $this->slider->image;
        }

        $this->slider->update([
            'title' => $validated['title'],
            'tagline' => $validated['tagline'],
            'link' => $validated['link'],
            'image' => $imagePath,
        ]);

        session()->flash('success', 'Slider updated successfully!');
        return redirect()->route('admin.sliders.index');
    }
    public function render()
    {
        return view('admin.sliders.edit');
    }
}
