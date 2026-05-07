<?php

namespace App\Livewire\Admin\Coupons;

use App\Models\Coupon;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    #[Layout('layouts.admin')]

    public string $code;
    public string $type;
    public string $value;
    public string $cart_value;
    public ?string $expired_date;

    public Coupon $coupon;

    protected function rules()
    {
        return [
            'code'         => ['required', 'string', 'max:50', Rule::unique('coupons', 'code')->ignore($this->coupon->id),],
            'type'         => ['required', Rule::in(['percent', 'fixed'])],
            'value'        => ['required', 'numeric', 'min:1'],
            'cart_value'   => ['required', 'numeric', 'min:0'],
            'expired_date' => ['nullable', 'date', 'after:today'],
        ];
    }

    public function mount(Coupon $coupon)
    {
        $this->coupon       = $coupon;
        $this->code         = $coupon->code;
        $this->type         = $coupon->type;
        $this->value        = $coupon->value;
        $this->cart_value   = $coupon->cart_value;
        $this->expired_date = $coupon->expired_date ? Carbon::parse($coupon->expired_date)->toDateString() : null;
    }

    public function update()
    {
        $this->validate();

        if ($this->expired_date === '' || $this->expired_date === null) {
            $this->expired_date = null;
        }

        $this->coupon->update([
            'code'         => $this->code,
            'type'         => $this->type,
            'value'        => $this->value,
            'cart_value'   => $this->cart_value,
            'expired_date' => $this->expired_date ?? null,
        ]);

        session()->flash('success', 'Coupon updated successfully!');
        return redirect()->route('admin.coupons.index');
    }

    public function render()
    {
        return view('admin.coupons.edit');
    }
}
