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
