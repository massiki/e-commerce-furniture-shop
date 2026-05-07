<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AdminInputText extends Component
{
    public string $field;
    public bool $isCol = false;

    public function render()
    {
        return view('components.admin-input-text');
    }
}
