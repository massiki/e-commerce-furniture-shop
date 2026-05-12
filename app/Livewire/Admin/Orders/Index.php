<?php

namespace App\Livewire\Admin\Orders;

use App\Models\Order;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]

    public function render()
    {
        $orders = Order::withCount('orderItems')->latest('id')->get();

        return view('admin.orders.index', compact('orders'));
    }
}
