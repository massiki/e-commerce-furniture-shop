<?php

namespace App\Livewire\Admin;

use App\Models\Order;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        // Latest orders for table
        $orders = Order::withCount('orderItems')->latest('id')->take(10)->get();

        // Total Orders
        $totalOrders = Order::count();

        // Total Amount (semua order, sum total)
        $totalAmount = Order::sum('total');

        // Pending Orders
        $pendingOrders = Order::where('order_status', 'pending')->count();
        $pendingOrdersAmount = Order::where('order_status', 'pending')->sum('total');

        // Delivered Orders
        $deliveredOrders = Order::where('order_status', 'delivered')->count();
        $deliveredOrdersAmount = Order::where('order_status', 'delivered')->sum('total');

        // Canceled Orders
        $canceledOrders = Order::where('order_status', 'cancelled')->count();
        $canceledOrdersAmount = Order::where('order_status', 'cancelled')->sum('total');

        return view('admin.dashboard', compact(
            'orders',
            'totalOrders',
            'totalAmount',
            'pendingOrders',
            'pendingOrdersAmount',
            'deliveredOrders',
            'deliveredOrdersAmount',
            'canceledOrders',
            'canceledOrdersAmount'
        ));
    }
}
