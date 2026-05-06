<?php

namespace App\Livewire\Admin\Orders;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Detail extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('admin.orders.detail');
    }
}
