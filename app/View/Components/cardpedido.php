<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardpedido extends Component
{
    public $nomeCliente;
    public $numeroPedido;
    public $dataPedido;
    public $status;
    public $elementoStatus;
    /*
    Tipo de status:

    bolinhaStatusVerde = Entregue
    bolinhaStatusRed = A fazer
    bolinhaStatusManga = A caminho
    */
    public function __construct($nomeCliente, $numeroPedido, $dataPedido, $status, $elementoStatus)
    {
        $this -> nomeCliente = $nomeCliente;
        $this -> numeroPedido = $numeroPedido;
        $this -> dataPedido = $dataPedido;
        $this -> status = $status;
        $this -> elementoStatus = $elementoStatus;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cardpedido');
    }
}
