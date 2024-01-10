<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Produto</title>
    <link rel="stylesheet" href="/css-atual/style.css">
    <link rel="icon" type="image/x-icon" href="/imgs/Oficial.gif">
    <script src="/js/Requisicoes/Header/header.js" defer></script>
</head>
<body>
    <x-header/>
    <section id="sectionProduct">
        <a href="/admin" id="volteInicio">Início</a>
        <div id="divInputConsul">
            <input type="text" placeholder="Nome do produto" class="inputsConsultas"><button class="btnsBorders">Buscar</button>
        </div>
        <div id="containerCard">
                <x-cardprodutobusca :img="'/imgs/camFrenteL.png'" :nome="'Nome do produto'" :preco="'R$100.00'" />
                <x-cardprodutobusca :img="'/imgs/camFrenteL.png'" :nome="'Nome do produto'" :preco="'R$100.00'" />
                <x-cardprodutobusca :img="'/imgs/camFrenteL.png'" :nome="'Nome do produto'" :preco="'R$100.00'" />
        </div>
    </section>
</body> 
</html>