<?php

namespace App\Livewire\Admin;

use App\Models\Noticia;
use Livewire\Component;

class Admindashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard', ['noticias' => Noticia::all()])->layout('layouts.admin-layout');
    }
}
