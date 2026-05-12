<?php

namespace App\Livewire\Admin\Orders;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Detail extends Component
{
    #[Layout('layouts.admin')]

    public Order $order;
    public Collection $orderItems;

    public function mount(Order $order)
    {
        $this->order = $order->load(['orderItems.product.category', 'orderItems.product.brand']);
        $this->orderItems = $this->order->orderItems;
    }

    public function render()
    {
        return view('admin.orders.detail');
    }
}
