<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AdminSidebar extends Component
{
    public array $links;

    public function mount()
    {
        $this->links = [
            [
                'name' => 'Dashboard',
                'url' => route('admin.dashboard'),
                'icon' => asset('img/menu-icon/dashboard.svg'),
            ],
            [
                'name' => 'Brands',
                'url' => route('admin.brands.index'),
                'icon' => asset('img/menu-icon/17.svg'),
            ],
            [
                'name' => 'Categories',
                'url' => route('admin.categories.index'),
                'icon' => asset('img/menu-icon/13.svg'),
            ],
            [
                'name' => 'Products',
                'url' => route('admin.products.index'),
                'icon' => asset('img/menu-icon/9.svg'),
            ],
            [
                'name' => 'Orders',
                'url' => route('admin.orders.index'),
                'icon' => asset('img/menu-icon/11.svg'),
            ],
            [
                'name' => 'Sliders',
                'url' => route('admin.sliders.index'),
                'icon' => asset('img/menu-icon/6.svg'),
            ],
            [
                'name' => 'Coupons',
                'url' => route('admin.coupons.index'),
                'icon' => asset('img/menu-icon/20.svg'),
            ],
            [
                'name' => 'Users',
                'url' => route('admin.users.index'),
                'icon' => asset('img/menu-icon/4.svg'),
            ],
            [
                'name' => 'Settings',
                'url' => route('admin.settings.index'),
                'icon' => asset('img/menu-icon/10.svg'),
            ],
        ];
    }

    public function render()
    {
        return view('components.admin-sidebar');
    }
}
