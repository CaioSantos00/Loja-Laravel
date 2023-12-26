<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYX | Carrinho</title>
    <link rel="stylesheet" href="/css-atual/style.css">
    <link rel="icon" type="image/x-icon" href="/imgs/Oficial.gif">   
     <script src="/js/Requisicoes/Header/header.js" defer></script>
</head>
<body>
    
<x-header/> 
    <main>
        <section id="sectionDetails">
            <div id="infosFinaisEndereco">
                <div id="divTitleEdit">
                    <div class="title">Endereço de entrega</div>
                    <a href="editarEndereco.html" id="aEdit">Editar</a>
                </div>
                <div id="infosEnd">
                <div class="holdInfosEnd">
                    <div id="nomeEndereco"></div>
                    <div id="telEndereco"></div>
                </div>
                    <div id="enderecoCompleto">
                        <div id="ruaEndereco"></div>
                        <div id="numberEndereco"></div>
                        <div id="bairroEndereco"></div>
                        <div id="estadoEndereco"></div>
                        <div id="cityEndereco"></div>
                    </div>
                </div>
                <a href="editarEndereco.html"><button class="btnsBordersBottomLess">Novo endereço</button></a>
            </div>
                <div class="titleBorders">Produtos Pedidos</div>
                <div id="holdProductsFimCar">
                <div id="holdProducts">
                    <div class="cardsProductsCar">
                        <div class="infosProducts">
                            <img src="../imgs/camFrenteR.png" alt="" class="imgCar">
                            <div class="infos">
                            <div>Nome do produto</div>
                            <div>R$100,00</div>
                            <div>Tamanho: P</div>
                            <div>Quantidade: 25</div>
                        </div>
                        </div>
                    </div>

                </div>
                </div>
                <div id="divInformacoesFinais" class="titleBorders">
                    <div>Total: <span id="precoTotalFim">R$1000.00</span></div>
                    <button class="btnsBordersBottomLess">Finalizar</button>
                </div>
        </section>
    </main>
     <footer class="footer">Copyright ©</footer>
</body>
</html>