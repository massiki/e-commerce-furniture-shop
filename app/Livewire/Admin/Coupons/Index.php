<?php

namespace App\Livewire\Admin\Coupons;

use App\Models\Coupon;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]

    public function delete(Coupon $coupons)
    {
        $coupons->delete($coupons->id);
        session()->flash('success', 'Coupon deleted successfully!');
        $this->redirect(route('admin.coupons.index'), true);
    }

    public function render()
    {
        $coupons = Coupon::latest('id')->paginate(10);
        return view('admin.coupons.index', compact('coupons'));
    }
}
