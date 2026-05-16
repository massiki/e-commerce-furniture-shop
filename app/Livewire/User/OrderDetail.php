<?php

namespace App\Livewire\User;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class OrderDetail extends Component
{
    public Order $order;

    public Collection $orderItems;

    public function mount(Order $order): void
    {
        abort_unless($order->user_id === Auth::id(), 403);

        $this->order = $order->load([
            'orderItems.product.category',
            'orderItems.product.brand',
        ]);
        $this->orderItems = $this->order->orderItems;
    }

    public function cancelOrder(): void
    {
        abort_unless($this->order->user_id === Auth::id(), 403);

        if (in_array($this->order->order_status, ['pending', 'processed'])) {
            foreach ($this->order->orderItems as $item) {
                if ($item->product) $item->product->increment('quantity', $item->quantity);
            }
            $this->order->update([
                'order_status' => 'cancelled',
                'cancelled_date' => now(),
                'payment_status' => 'failed'
            ]);
            session()->flash('success', 'Order cancelled successfully.');
        }
    }

    public function confirmReceived()
    {
        abort_unless($this->order->user_id === Auth::id(), 403);

        if ($this->order->order_status === 'shipped') {
            $this->order->update([
                'order_status' => 'delivered',
                'delivered_date' => now(),
                'payment_status' => 'paid'
            ]);
        }
        session()->flash('success', 'Order delivered successfully.');
    }

    public function logout(): void
    {
        Auth::guard('web')->logout();
        Session::invalidate();
        Session::regenerateToken();
        $this->redirect(route('login'), navigate: true);
    }

    public function render()
    {
        return view('user.detail-order');
    }
}
