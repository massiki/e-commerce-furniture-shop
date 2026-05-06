<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AlertError extends Component
{
    public string $field = '';

    public function mount(string $field)
    {
        $this->field = $field;
    }

    public function render()
    {
        return view('components.alert-error');
    }
}
