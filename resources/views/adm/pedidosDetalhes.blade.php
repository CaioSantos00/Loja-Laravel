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
    <section id="sectionDetails">
        <a href="/admin" id="volteInicio">Início</a>
       <div id="detalhesPedidos">
        <div class="titleDetalhes">Detalhes do Pedido</div>
        <div id="divAlgumasInfos">
            <div id="boxPrima" class="borderBoxs">
                <div>Cliente: <span id="nomeCliente">Caio Santos</span></div>
                <div>Telefone: <span  id="telCliente">13 9999-9999</span></div>
                <div >Número do Pedido: <span id="numeroPedido">55</span></div>
                <div >Data do Pedido: <span id="dataPedido">11/11/1111</span></div>
            </div>
            <div id="boxSecond" class="borderBoxs">
                <div >Rua: <span id="ruaCliente">rua timóteo garcia lamas</span></div>
                <div>Número: <span id="numberCasa">499</span></div>
                <div >Bairro: <span id="bairroCliente">Nova Itanhaém</span></div>
                <div >Cidade: <span id="cidadeCliente">Itanhaém</span></div>
            </div>
        </div>
       </div>

       <div id="detalhesCarrinho">
        <div class="titleDetalhes">Detalhes do Carrinho</div>
        <div id="holdInfosCar">
            <div class="cardsProductsCar">
                <div class="infosProducts">
                    <img src="../imgs/camFrenteR.png" alt="" class="imgCar">
                    <div class="infos">
                    <div>Nome do produto</div>
                    <div>R$100,00</div>
                    <div>Tamanho: P</div>
                    <div>Quantidade: 23</div>
                    <div>Preço: R$0000.00</div>
                    <div>Preço Final: R$0000.00</div>
                </div>
                </div>
            </div>
    
        </div>
       </div>

       <div class="divBoxDescri">
        <div id="precoTotal" class="title">Preço total: R$<span>1000.00</span></div>
       <button class="btnsBorders">Finalizar Pedido</button>
       </div>
    </section>
</body>
</html>