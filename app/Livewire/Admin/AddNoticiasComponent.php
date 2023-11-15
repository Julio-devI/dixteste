<?php

namespace App\Livewire\Admin;

use App\Models\Noticia;
use Livewire\Component;

class AddNoticiasComponent extends Component
{
    public $titulo;
    public $subtitulo;
    public $descricao;
    public $user_id;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'titulo' => 'required',
            'subtitulo' => 'required',
            'descricao' => 'required',
            'user_id' => 'required'
        ]);
    }

    public function adicionaNoticia()
    {
        $this->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'descricao' => 'required',
            'user_id' => 'required'
        ]);

        $noticia = new Noticia();
        
        $noticia->user_id = $this->user_id;
        $noticia->titulo = $this->titulo;
        $noticia->subtitulo = $this->subtitulo;
        $noticia->descricao = $this->descricao;

        $noticia->save();
        session()->flash('message', 'Noticia adicionada com sucesso!');
    }

    public function render()
    {
        return view('livewire.admin.add-noticias-component')->layout('layouts.admin-layout');
    }
}
