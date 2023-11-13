<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AddNoticiasComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-noticias-component')->layout('layouts.admin-layout');
    }
}
