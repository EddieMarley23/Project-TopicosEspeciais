<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $senha;
    public $errorMessage;


    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $this->errorMessage = null;

        if ($this->email && $this->senha) {
            if (Auth::attempt(['email' => $this->email, 'password' => $this->senha])) {
                $this->redirectRoute('home');
            } else {
                $this->errorMessage = 'Login ou senha incorretos.';
            }
        } else {
            $this->errorMessage = 'Preencha todos os campos.';
        }
    }
}
