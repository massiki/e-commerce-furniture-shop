<?php

namespace App\Livewire\Admin\Orders;

use App\Models\Order;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.admin')]

    public function render()
    {
        $orders = Order::withCount('orderItems')->latest('id')->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }
}
