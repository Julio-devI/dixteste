<?php

namespace App\Livewire\Admin;

use App\Models\Noticia;
use Livewire\Component;

class EditNoticiasComponent extends Component
{
    public $noticia_id;
    public $titulo;
    public $subtitulo;
    public $descricao;
    public $user_id;

    public function mount($noticia_id)
    {
        $noticia = Noticia::find($noticia_id);

        $this->noticia_id = $noticia->id;
        $this->titulo = $noticia->titulo;
        $this->subtitulo = $noticia->subtitulo;
        $this->descricao = $noticia->descricao;
        $this->user_id = $noticia->user_id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'titulo' => 'required',
            'subtitulo' => 'required',
            'descricao' => 'required',
            'user_id' => 'required'
        ]);
    }

    public function updateNoticia()
    {
        $this->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'descricao' => 'required',
            'user_id' => 'required'
        ]);

        $noticia = Noticia::find($this->noticia_id);

        $noticia->titulo = $this->titulo;
        $noticia->subtitulo = $this->subtitulo;
        $noticia->descricao = $this->descricao;
        $noticia->user_id = $this->user_id;

        $noticia->save();
        session()->flash('message', 'Noticia foi adicionada com sucesso');
    }

    public function render()
    {
        return view('livewire.admin.edit-noticias-component');
    }
}
