<?php

namespace App\Livewire\Admin\Coupons;

use App\Models\Coupon;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    #[Layout('layouts.admin')]

    public string $code;
    public string $type;
    public string $value;
    public string $cart_value;
    public ?string $expired_date;

    protected function rules()
    {
        return [
            'code'         => ['required', 'string', 'max:50', 'unique:coupons,code'],
            'type'         => ['required', Rule::in(['percent', 'fixed'])],
            'value'        => ['required', 'numeric', 'min:1'],
            'cart_value'   => ['required', 'numeric', 'min:0'],
            'expired_date' => ['nullable', 'date', 'after:today'],

        ];
    }

    public function store()
    {
        $this->validate();

        Coupon::create([
            'code'         => $this->code,
            'type'         => $this->type,
            'value'        => $this->value,
            'cart_value'   => $this->cart_value,
            'expired_date' => $this->expired_date ?? null,
        ]);

        session()->flash('success', 'Coupon created successfully!');
        return $this->redirect(route('admin.coupons.index'), true);
    }

    public function render()
    {
        return view('admin.coupons.create');
    }
}
