<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class EditUsuariosComponent extends Component
{
    public $usuario_id;
    public $nome;
    public $email;
    public $password;
    public $utype;

    public function mount($usuario_id)
    {
        $usuario = User::find($usuario_id);

        $this->usuario_id = $usuario->id;
        $this->nome = $usuario->name;
        $this->email = $usuario->email;
        $this->password = $usuario->password;
        $this->utype = $usuario->utype;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'nome' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }

    public function updateNoticia()
    {
        $this->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $usuario = User::find($this->noticia_id);

        $usuario->name = $this->nome;
        $usuario->email = $this->email;
        $usuario->password = $this->password;
        $usuario->utype = $this->utype;

        $usuario->save();
        session()->flash('message', 'Usuario editado com sucesso');
    }
    public function render()
    {
        return view('livewire.admin.edit-usuarios-component')->layout('layouts.admin-layout');
    }
}
