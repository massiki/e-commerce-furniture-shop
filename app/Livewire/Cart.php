<?php

namespace App\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\CartItem;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Str;

class Cart extends Component
{
    public string $code = '';

    public function increment(CartItem $cartItems)
    {
        $cartItems->quantity += 1;
        $cartItems->save();
    }

    public function decrement(CartItem $cartItems)
    {
        if ($cartItems->quantity <= 1) return;
        $cartItems->quantity -= 1;
        $cartItems->save();
    }

    public function remove(CartItem $cartItems)
    {
        $cartItems->delete();
        $this->dispatch('cart-updated');
    }

    public function clear()
    {
        $cart = ModelsCart::where('user_id', Auth::id())->first();
        if ($cart) {
            $cart->items()->delete();
        }
        $this->dispatch('cart-updated');
    }

    public function applyCoupon()
    {
        $coupon = Coupon::whereRaw('upper(code) = ?', [Str::upper($this->code)])->first();

        if ($coupon) {
            if (
                $coupon && $coupon->expired_date && Carbon::parse($coupon->expired_date)->isPast()
            ) return session()->flash('error', 'Coupon code is invalid!');

            Session::put('coupon', [
                'code' => $coupon->code,
                'type' => $coupon->type,
                'value' => $coupon->value,
                'cart_value' => $coupon->cart_value,
                'expired_date' => $coupon->expired_date,
            ]);

            $this->code = Str::upper(session('coupon.code'));
            session()->flash('success', 'Coupon has been successfully applied!');
        } else {
            session()->flash('error', 'Coupon code is invalid!');
        }
    }

    public function removeCoupon()
    {
        Session::forget('coupon');
        $this->code = '';
        session()->flash('success', 'Coupon has been removed!');
    }

    public function render()
    {
        // cek expired coupon, jika coupon expired maka hapus session key coupon
        if (session('coupon.expired_date') && Carbon::parse(session('coupon.expired_date'))->isPast()) {
            Session::forget('coupon');
            $this->code = '';
            session()->flash('error', 'Coupon code is invalid!');
        }

        // ini agar uppercase di input coupon
        if (session('coupon')) $this->code = Str::upper(session('coupon.code'));

        // menghitung subtotal harga product
        $cart = ModelsCart::firstOrCreate(['user_id' => Auth::user()->id]);
        $cartItems = $cart->items()->latest('id')->get();
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $price = $item->product->regular_price;
            if ($item->product->sale_price) {
                $price = $item->product->sale_price;
            }
            $subtotal += $price * $item->quantity;
        }

        // cek apakah subtotal kurang dari harga minimal belanja
        $discount = 0;
        if ($subtotal >= session('coupon.cart_value')) {
            // cek type coupon, apakah fixed atau percent
            if (session('coupon.type') == 'fixed') {
                $discount = session('coupon.value');
            } else {
                $discount = ($subtotal * session('coupon.value')) / 100;
            }
            $total = $subtotal - $discount;
        } else {
            $total = $subtotal;
            session()->flash('error', 'Coupon cannot be used, minimum purchase must be more than Rp ' . number_format(session('coupon.cart_value'), 0, ',', '.'));
        }

        return view('cart', compact('cartItems', 'subtotal', 'discount', 'total'));
    }
}
