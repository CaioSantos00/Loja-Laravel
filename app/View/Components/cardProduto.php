<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardProduto extends Component
{
    public $img;
    public $nome;
    public $preco;
    public function __construct($img, $nome, $preco)
    {
        $this->img = $img;
        $this->nome = $nome;
        $this->preco = $preco;        
    }

    public function render(): View|Closure|string
    {
        return view('components.card-produto');
    }
}
