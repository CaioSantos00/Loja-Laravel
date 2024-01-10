<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuário</title>
    <link rel="stylesheet" href="/css-atual/style.css">
    <link rel="icon" type="image/x-icon" href="/imgs/Oficial.gif">
    <script src="/js/Requisicoes/Header/header.js" defer></script>
</head>
<body>
    <x-header/>
    <section>
        <a href="painelPerfilAdm.html" id="volteInicio">Início</a>
        <div id="divInputConsul">
            <input type="text" placeholder="Nome do Cliente" class="inputsConsultas" id="clientInput"><button class="btnsBorders">Buscar</button>
        </div>

        <div id="containerCard">
            <div class="cardPedido">
                <div >Cliente: <span>Caio Santos</span></div>
                <a href=""><button class="btnsBorders">Mais Detalhes</button></a>
            </div>
        </div>
    </section>
</body>
</html>