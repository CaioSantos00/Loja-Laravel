<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYX | Início</title>
    <link rel="stylesheet" href="/css-atual/style.css">
    <link rel="icon" type="image/x-icon" href="/imgs/Oficial.gif">
    <script src="/js/Animations/animationAnuncio.js" defer></script>
    <script src="/js/Requisicoes/Header/header.js" defer></script>
    <!--<script src="https://unpkg.com/scrollreveal" defer></script>-->
</head>
<body>
  
        <x-header/>
<main>
    <section>
        <div id="containerCard">
            <x-card-produto :img="'/imgs/camFrenteL.png'" :nome="'Nome do produto'" :preco="'R$100.00'" />
            <x-card-produto :img="'/imgs/IMG_5136.PNG'" :nome="'Nome do produto'" :preco="'R$100.00'" />
            <x-card-produto :img="'/imgs/IMG_5137.PNG'" :nome="'Nome do produto'" :preco="'R$0000.00'" />
            <x-card-produto :img="'/imgs/IMG_5138.PNG'" :nome="'Bermuda'" :preco="'R$100.00'" />
            <x-card-produto :img="'/imgs/frentebranca.png'" :nome="'Camiseta Branca'" :preco="'R$100.00'" />
            <x-card-produto :img="'/imgs/rosafrente.png'" :nome="'Camiseta Rosa'" :preco="'R$100.00'" />
            <x-card-produto :img="'/imgs/vemelhafrente.png'" :nome="'Camiseta Vermelha'" :preco="'R$100.00'" />
        </div>
    </section>
    <div id="loading">
        <img src="/imgs/Oficial.gif" alt="Carregando..." id="logoCarregando">
    </div>
</main>
    <footer>
        COPYRIGHT ©
    </footer>
</body>
</html>