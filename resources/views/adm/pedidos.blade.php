<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" href="/css-atual/style.css">
    <link rel="icon" type="image/x-icon" href="/imgs/Oficial.gif">
    <script src="/js/Requisicoes/Header/header.js" defer></script>
</head>
<body>
    <x-header/>
    <section>
        <a href="/admin" id="volteInicio">Início</a>
        <div id="divInputConsul">
            <input type="text" placeholder="Nome do Cliente" class="inputsConsultas"><button class="btnsBorders">Buscar</button>
        </div>
        <div id="containerCard">
            <x-cardpedido :nomeCliente="'Caio'" :numeroPedido="1" :dataPedido="'04/01/2024'" :status="'A fazer'" :elementoStatus="'bolinhaStatusRed'"/>
            <x-cardpedido :nomeCliente="'Caio'" :numeroPedido="1" :dataPedido="'04/01/2024'" :status="'A caminho'" :elementoStatus="'bolinhaStatusManga '"/>
            <x-cardpedido :nomeCliente="'Caio'" :numeroPedido="1" :dataPedido="'04/01/2024'" :status="'Entregue'" :elementoStatus="'bolinhaStatusVerde '"/>

        </div>
    </section>
</body>
</html>