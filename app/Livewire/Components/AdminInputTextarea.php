<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AdminInputTextarea extends Component
{
    public string $field = '';

    public function render()
    {
        return view('components.admin-input-textarea');
    }
}
