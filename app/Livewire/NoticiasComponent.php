<?php

namespace App\Livewire;

use Livewire\Component;

class NoticiasComponent extends Component
{
    public function render()
    {
        return view('livewire.noticias-component', ['noticias' => auth()->user()->noticias])->layout('layouts.app');
    }
}
