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
    public string $orderStatus;

    public function mount(Order $order)
    {
        $this->order = $order->load(['orderItems.product.category', 'orderItems.product.brand']);
        $this->orderItems = $this->order->orderItems;
        $this->orderStatus = $order->order_status;
    }

    public function updateStatus()
    {
        // update order status, pending -> processed
        if ($this->order->order_status === 'pending') {
            $this->order->update(['order_status' => 'processed']);
            $this->orderStatus = 'processed';
            session()->flash('success', 'Order processed successfully.');
            return;
        }

        // update order status, processed -> shipped
        if ($this->order->order_status === 'processed' && $this->orderStatus === 'shipped') {
            $this->order->update(['order_status' => $this->orderStatus]);
            session()->flash('success', 'Order shipped successfully.');
            return;
        }

        // update urder stastus, shipped -> delivered
        if ($this->order->order_status === 'shipped' && $this->orderStatus === 'delivered') {
            $this->order->update([
                'order_status' => $this->orderStatus,
                'delivered_date' => now(),
                'payment_status' => 'paid'
            ]);
            session()->flash('success', 'Order delivered successfully.');
            return;
        }

        // update order status, processed -> cancelled or pending -> cancelled
        if (in_array($this->order->order_status, ['pending', 'processed', 'shipped']) && $this->orderStatus === 'cancelled') {
            foreach ($this->order->orderItems as $item) {
                if ($item->product) $item->product->increment('quantity', $item->quantity);
            }
            $this->order->update([
                'order_status' => 'cancelled',
                'cancelled_date' => now(),
                'payment_status' => 'failed'
            ]);
            session()->flash('success', 'Order cancelled successfully.');
            return;
        }
    }

    public function render()
    {
        return view('admin.orders.detail');
    }
}
