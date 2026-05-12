<?php

namespace App\Livewire\User;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkout extends Component
{
    public function render()
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);
        $cartItems = $cart->items()->latest('id')->get();

        if ($cartItems->isEmpty()) $this->redirect(route('shop'), true);

        $subTotal = 0;
        $orderItems = [];
        foreach ($cartItems as $item) {
            $price = $item->product->sale_price ?? $item->product->regular_price;
            $totalPrice = $price * $item->quantity;
            $subTotal += $totalPrice;
            $orderItems[] = [
                'image' => $item->product->image,
                'nameProduct' => $item->product->name,
                'quantity' => $item->quantity,
                'totalPrice' => $totalPrice,
            ];
        }

        $discount = 0;
        if ($subTotal >= session('coupon.cart_value')) {
            if (session('coupon.type') == 'fixed') {
                $discount = session('coupon.value');
            } else {
                $discount = ($subTotal * session('coupon.value')) / 100;
            }
            $total = $subTotal - $discount;
        } else {
            $total = $subTotal;
            session()->flash('error', 'Coupon cannot be used, minimum purchase must be more than Rp ' . number_format(session('coupon.cart_value'), 0, ',', '.'));
        }

        return view('user.checkout', compact('cartItems', 'orderItems', 'subTotal', 'discount', 'total'));
    }
}
