<?php

namespace App\Livewire\Admin\Brands;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('admin.brands.edit');
    }
}
