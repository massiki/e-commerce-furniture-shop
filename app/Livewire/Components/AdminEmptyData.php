<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AdminEmptyData extends Component
{
    public string $totalColpan = '';
    public string $title = '';
    public string $subtitle = '';

    public function mount(string $totalColpan, string $title, string $subtitle)
    {
        $this->totalColpan = $totalColpan;
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    public function render()
    {
        return view('components.admin-empty-data');
    }
}
