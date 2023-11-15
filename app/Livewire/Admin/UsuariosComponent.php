<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UsuariosComponent extends Component
{
    public $usuario_id;

    public function deleteUsuario()
    {
        $usuario = User::find($this->usuario_id);
        $usuario->delete();
        session()->flash('message', 'Usuario deletado com sucesso');
    }
    public function render()
    {
        return view('livewire.admin.usuarios-component', ['usuarios' => User::all()])->layout('layouts.admin-layout');
    }
}
