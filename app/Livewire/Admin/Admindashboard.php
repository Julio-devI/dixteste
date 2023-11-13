<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Admindashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard')->layout('layouts.admin-layout');
    }
}
