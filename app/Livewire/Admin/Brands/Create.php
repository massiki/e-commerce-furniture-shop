<?php

namespace App\Livewire\Admin\Brands;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Layout('layouts.admin')]

    #[Validate('required|string|max:255')]
    public string $name = '';

    public string $slug = '';

    #[Validate('required|mimes:jpg,jpeg,png,svg,webp|max:1024')]
    public string $image = '';

    public function store()
    {
        $this->validate();
    }

    public function render()
    {
        return view('admin.brands.create');
    }
}
