<div class="cardPedido">
    <div>Cliente: <span>{{$nomeCliente}}</span></div>
    <div>Número do Pedido: <span>{{$numeroPedido}}</span></div>
    <div>Data do Pedido: <span>{{$dataPedido}}</span></div>
    <div class="situacaoPedido">Status: <div class="{{$elementoStatus}}"></div><span>{{$status}}</span></div>
    <a href="/admin/detalhespedido"><button class="btnsBorders">Mais Detalhes</button></a>
</div>