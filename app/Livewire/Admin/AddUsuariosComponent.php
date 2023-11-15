<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AddUsuariosComponent extends Component
{
    public $nome;
    public $email;
    public $password;
    public $utype;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'nome' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }

    public function adicionaUsuario()
    {
        $this->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $usuario = new User();
        $usuario->name = $this->nome;
        $usuario->email = $this->email;
        $usuario->password = $this->password;
        $usuario->utype = $this->utype;

        $usuario->save();
        session()->flash('message', 'Usuario adicionado com sucesso');
    }

    public function render()
    {
        return view('livewire.admin.add-usuarios-component')->layout('layouts.admin-layout');
    }
}
