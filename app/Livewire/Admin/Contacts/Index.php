<?php

namespace App\Livewire\Admin\Contacts;

use App\Models\Contact;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]

    public function render()
    {
        $contacts = Contact::latest('id')->get();
        return view('admin.contacts.index', compact('contacts'));
    }
}
