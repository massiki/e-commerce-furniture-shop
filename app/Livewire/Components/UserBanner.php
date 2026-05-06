<?php

namespace App\Livewire\Components;

use Livewire\Component;

class UserBanner extends Component
{
    public string $title = '';

    public function mount(string $title)
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('components.user-banner');
    }
}
