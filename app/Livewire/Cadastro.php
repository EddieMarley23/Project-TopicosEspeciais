<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Cadastro extends Component
{
    public $email;
    public $nome;
    public $senha;
    public $confirmarSenha;

    public function render()
    {
        return view('livewire.cadastro');
    }

    public function cadastrar()
    {
        if ($this->senha == $this->confirmarSenha && (!empty($this->email) && !empty($this->nome))) {
            User::create([
                'email' => $this->email,
                'name' => $this->nome,
                'password' => $this->senha,
            ]);
            return redirect()->route('login');
        }
    }
}
