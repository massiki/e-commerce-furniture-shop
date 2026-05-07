<?php

namespace App\Livewire\Admin\Sliders;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]

    public function delete(Slider $slider)
    {
        if ($slider->image && Storage::disk('public')->exists($slider->image)) {
            Storage::disk('public')->delete($slider->image);
        }
        $slider->delete($slider->id);
        session()->flash('success', 'Slider deleted successfully!');
        $this->redirect(route('admin.sliders.index'), true);
    }

    public function render()
    {
        $sliders = Slider::latest('id')->get();
        return view('admin.sliders.index', compact('sliders'));
    }
}
