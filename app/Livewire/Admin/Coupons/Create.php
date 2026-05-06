<?php

namespace App\Livewire\Admin\Coupons;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('admin.coupons.create');
    }
}
