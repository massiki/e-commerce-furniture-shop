<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AdminInputText extends Component
{
    public string $field = '';

    public function mount(string $field)
    {
        $this->field = $field;
    }

    public function render()
    {
        return view('components.admin-input-text');
    }
}
