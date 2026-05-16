<?php

namespace App\Livewire\Admin\Users;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        $users = User::latest('id')->paginate(10);
        return view('admin.users.index', compact('users'));
    }
}
