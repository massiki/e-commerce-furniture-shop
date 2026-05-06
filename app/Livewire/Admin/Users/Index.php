<?php

namespace App\Livewire\Admin\Users;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('admin.users.index');
    }
}
