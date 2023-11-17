<?php

namespace App\Livewire;

use App\Models\Noticia;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NoticiasComponent extends Component
{
    public $titulo_buscado = "";

    public function busca()
    {
        $user = Auth::user();
        $query = Noticia::where('titulo', 'like', '%' .$this->titulo_buscado.'%')->where('user_id', $user->id)->get();
        return $query;
    }

    public function render()
    {
        return view('livewire.noticias-component', ['noticias' => $this->busca()])->layout('layouts.app');
    }
}
