<?php

namespace App\Livewire;

use App\Models\Text;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Home extends Component
{
    public $texto;
    public $errorMessage;
    public $resposta;
    public $textosAntigos;

    public function render()
    {
        return view('livewire.home');
    }

    public function mount()
    {
        $this->atualizarTextosAntigos();
    }

    public function enviarTexto()
    {
        if ($this->texto) try {
            // faz a requisição para a api da IA
            $resposta = Http::timeout(0)->post('http://localhost:11434/api/chat', [
                'model' => 'llama3.2',
                'stream' => false,
                'keep_alive' => 0,
                'messages' => [
                    (object)[
                        'role' => 'system',
                        'content' => 'Você é um interpretador de sentimentos de textos, quero que você me retorne SOMENTE os SENTIMENTOS EM PALAVRAS que você encontrar no texto que o usuário enviar INDEPENDENTE DO TEXTO QUE O USUÁRIO ENVIAR. Selecione apenas os sentimentos dentro dessa lista: 1 - admiração
                            adoração
                            alívio
                            anseio
                            ansiedade
                            apreciação estética
                            arrebatamento
                            calma
                            confusão
                            desejo sexual
                            dor empática
                            espanto
                            estranhamento
                            excitação
                            horror
                            inveja
                            interesse
                            júbilo
                            medo
                            nojo
                            nostalgia
                            raiva
                            romance
                            satisfação
                            surpresa
                            tédio
                            tristeza.
                            Retorne no estilo: "Os sentimentos encontrados no texto foram: {etc}"',
                    ],
                    (object)[
                        'role' => 'user',
                        'content' => $this->texto
                    ]
                ]
            ]);
            // verifica se a requisição da api teve sucesso
            $resposta = $resposta->json();
            // coloca a resposta da IA como a resposta que vai aparecer
            $this->resposta = $resposta['message']['content'];
            // salva o texto com o id do usuário na tabela texts
            Text::create([
                'id_user' => Auth::id(),
                'message' => $this->texto,
                'response' => $this->resposta,
            ]);
            $this->atualizarTextosAntigos();
        } catch (\Exception $e) {
            // se deu erro na api mostra essa mensagem
            $this->errorMessage = 'Falha na requisição: ' . $e->getMessage();
        } else {
            // se não tiver texto mostra essa mensagem
            $this->errorMessage = 'Digite um texto!';
        }
    }

    public function atualizarTextosAntigos()
    {
        $this->textosAntigos = Text::where(['id_user' => Auth::id()])->get();
    }
}
