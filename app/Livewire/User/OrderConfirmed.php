<?php

namespace App\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderConfirmed extends Component
{
    public Order $order;

    public function mount(Order $order): void
    {
        abort_unless($order->user_id === Auth::id(), 403);

        $this->order = $order->load('orderItems');
    }

    public function paymentMethodLabel(): string
    {
        return match ($this->order->payment_method) {
            'cod' => 'Cash on Delivery',
            'bank_transfer' => 'Bank Transfer',
            'e_wallet' => 'E-Wallet',
            default => ucfirst(str_replace('_', ' ', $this->order->payment_method)),
        };
    }

    public function paymentStatusLabel(): string
    {
        return match ($this->order->payment_status) {
            'paid' => 'Paid',
            'failed' => 'Failed',
            default => 'Pending',
        };
    }

    public function paymentStatusNote(): ?string
    {
        if ($this->order->payment_method === 'cod' && $this->order->payment_status === 'unpaid') {
            return 'Will be collected on delivery';
        }

        if ($this->order->payment_status === 'paid') {
            return 'Payment received';
        }

        if ($this->order->payment_method === 'bank_transfer' && $this->order->payment_status === 'unpaid') {
            return 'Please complete your bank transfer';
        }

        return null;
    }

    public function render()
    {
        return view('user.order-confirmed');
    }
}
