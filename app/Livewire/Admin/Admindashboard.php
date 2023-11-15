<?php

namespace App\Livewire\Admin;

use App\Models\Noticia;
use Livewire\Component;

class Admindashboard extends Component
{
    public $noticia_id;

    public function deleteNoticia()
    {
        $noticia = Noticia::find($this->noticia_id);
        $noticia->delete();
        session()->flash('message', 'Noticia deletada com sucesso');
    }

    public function render()
    {
        return view('livewire.admin.admin-dashboard', ['noticias' => Noticia::all()])->layout('layouts.admin-layout');
    }
}
