<?php

namespace App\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $phone = '';
    public string $message = '';

    public function send()
    {
        $validated = $this->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        ModelsContact::create($validated);

        session()->flash('success', 'Pesan berhasil dikirim!');
        $this->reset(['name', 'email', 'subject', 'phone', 'message']);
    }

    public function render()
    {
        return view('contact');
    }
}
