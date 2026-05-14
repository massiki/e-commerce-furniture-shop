<?php

namespace App\Livewire\User;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Checkout extends Component
{
    public string $name;
    public string $phone;
    public string $province;
    public string $city;
    public string $district;
    public string $subdistrict;
    public string $postal_code;
    public string $full_address;
    public ?string $address_note = null;
    public string $payment_method;

    protected function rules()
    {
        return [
            'name'          => ['required', 'string', 'max:255'],
            'phone'         => ['required', 'numeric', 'digits_between:10,15:'],
            'province'      => ['required', 'string', 'max:100'],
            'city'          => ['required', 'string', 'max:100'],
            'district'      => ['required', 'string', 'max:100'],
            'subdistrict'   => ['required', 'string', 'max:100'],
            'postal_code'   => ['required', 'numeric', 'digits:5'],
            'full_address'  => ['required', 'string'],
            'address_note'  => ['nullable', 'string'],
            'payment_method'  => ['required', 'string', 'max:255'],
        ];
    }

    public function checkout()
    {
        $this->validate();

        // update data address user jika belum ada maka buat data address baru
        Address::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'name' => $this->name,
                'phone' => $this->phone,
                'province' => $this->province,
                'city' => $this->city,
                'district' => $this->district,
                'subdistrict' => $this->subdistrict,
                'postal_code' => $this->postal_code,
                'full_address' => $this->full_address,
                'address_note' => $this->address_note,
            ]
        );

        // Simpan data order dan orderItems dari cart dan cartItems

        // Ambil cart dan item-itemnya untuk user ini
        $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);
        $cartItems = $cart->items()->latest('id')->get();

        if ($cartItems->isEmpty()) $this->redirect(route('shop'), true);

        // Hitung total, subtotal dan diskon
        $subTotal = 0;
        foreach ($cartItems as $item) {
            // cek instock dan quantity
            if ($item->product->stock_status === 'outofstock' || $item->product->quantity <= 0) {
                session()->flash('error', 'Sorry, the ' . $item->product->name . ' products  in your cart are out of stock.');
                return;
            }
            // cek apakah cukup quantity cukup
            if ($item->quantity > $item->product->quantity) {
                session()->flash('error', 'Sorry, the number of ' . $item->product->name . ' products in your cart exceeds the available stock.');
                return;
            }
            $price = $item->product->sale_price ?? $item->product->regular_price;
            $totalPrice = $price * $item->quantity;
            $subTotal += $totalPrice;
        }
        $discount = 0;
        if (session()->has('coupon') && $subTotal >= session('coupon.cart_value')) {
            if (session('coupon.type') == 'fixed') {
                $discount = session('coupon.value');
            } else {
                $discount = ($subTotal * session('coupon.value')) / 100;
            }
        }
        $total = $subTotal - $discount;

        // Simpan order utama
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'subtotal' => $subTotal,
            'discount' => $discount,
            'shipping_cost' => 0,
            'total' => $total,
            'name' => $this->name,
            'phone' => $this->phone,
            'province' => $this->province,
            'city' => $this->city,
            'district' => $this->district,
            'subdistrict' => $this->subdistrict,
            'postal_code' => $this->postal_code,
            'full_address' => $this->full_address,
            'address_note' => $this->address_note,
            'payment_method' => $this->payment_method,
            'payment_status' => 'unpaid',
            'order_status' => 'pending',
        ]);

        // Simpan cart items ke order items
        foreach ($cartItems as $item) {
            $price = $item->product->sale_price ?? $item->product->regular_price;
            $totalPrice = $price * $item->quantity;
            $item->product->update(['quantity' => $item->product->quantity - $item->quantity]);
            OrderItem::create([
                'product_id' => $item->product_id,
                'order_id' => $order->id,
                'price' => $price,
                'quantity' => $item->quantity,
            ]);
        }

        $cart->items()->delete();
        session()->flash('success', 'Your order has been placed!');
        return $this->redirect(route('user.dashboard'), true);
    }

    public function render()
    {
        $addressUser = Address::where('user_id', Auth::id())->first();
        if ($addressUser) {
            $this->name = $addressUser->name;
            $this->phone = $addressUser->phone;
            $this->province = $addressUser->province;
            $this->city = $addressUser->city;
            $this->district = $addressUser->district;
            $this->subdistrict = $addressUser->subdistrict;
            $this->postal_code = $addressUser->postal_code;
            $this->full_address = $addressUser->full_address;
            $this->address_note = $addressUser->address_note;
        }

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
