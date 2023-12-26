<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYX | Carrinho</title>
    <link rel="stylesheet" href="/css-atual/style.css">
    <link rel="icon" type="image/x-icon" href="/imgs/Oficial.gif">
    <script src="/js/Requisicoes/Header/header.js" defer></script>
    <script src="/js/Animations/freteCar.js" defer></script>
</head>

<body>

<x-header/> 
    <main>
        <section id="sectionDetails">
            <div id="divisionCar">
                <div id="holdProducts">
                    <div class="cardsProductsCar">
                        <div class="infosProducts">
                            <img src="../imgs/camFrenteR.png" alt="" class="imgCar">
                            <div class="infos">
                            <div>Nome do produto</div>
                            <div>R$100,00</div>
                            <div>Tamanho: P</div>
                        </div>
                        </div>
                        <div id="holdCancelAdd">
                            <div><button class="btnsBordersBottomLess">-</button> 1 <button class="btnsBordersBottomLess">+</button></div>
                            <button class="btnsCancel">Excluir</button>
                        </div>
                    </div>
                    <div class="cardsProductsCar">
                        <div class="infosProducts">
                            <img src="../imgs/camFrenteR.png" alt="" class="imgCar">
                            <div class="infos">
                            <div>Nome do produto</div>
                            <div>R$100,00</div>
                            <div>Tamanho: P</div>
                        </div>
                        </div>
                        <div id="holdCancelAdd">
                            <div><button class="btnsBordersBottomLess">-</button><span> 1 </span><button class="btnsBordersBottomLess">+</button></div>
                            <button class="btnsCancel">Excluir</button>
                        </div>
                    </div>
                </div>
                <div id="holdInfosPagamento">
                    <div class="title">Resumo do pedido</div>
                <div class="riscoQuebra"></div> 
                    <div  class="subTotal">Subtotal: R$100.00</div>
                    <div  class="subTotal">Pedido total: R$100.00</div>
                    <div id="divFrete" class="divBoxDescri">Calcule seu frete
                        <div id="divInputFrete">
                            <input class="inputs" placeholder="Digite seu CEP" type="text"><button class="btnsBordersBottomLess">calcular</button>
                        </div>
                        <div>
                            Valor do frete: 100.00
                        </div>
                    </div>
                    <a href="/finalizar"><button class="btnsBorders">Finalizar pedido</button></a>
                    
                </div>
            </div>
        </section>
    </main>
    <footer>
        COPYRIGHT ©
    </footer>
</body>
</html>