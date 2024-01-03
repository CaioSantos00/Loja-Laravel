<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="/css-atual/style.css">
    <link rel="icon" type="image/x-icon" href="/imgs/Oficial.gif">
    <script src="/js/Requisicoes/Header/header.js" defer></script>
    <script type="application/x-javascript" src="/js/CreationsElements/cadasterProduct.js" defer></script>
</head>
<body>
  <x-header/>
    <section id="sectionForms">
      <a href="/admin" id="volteInicio">Início</a>
      <form id="formProduct" method="POST">
      
      <div class="titleForms">Cadastrar Produto</div>
      <label>
        Produto disponível ?
        <input type="checkbox" name="availability">
    </label>
    <input class="inputs" type="text" name="name" placeholder="Nome do produto" required>
    <textarea class="inputs" name="description" placeholder="Descrição do produto" required></textarea>
    <input class="inputFile inputs" type="file" name="pictures[]" multiple required>
    <button id="maisCor" class="btnsBordersBottomLess">Adicionar cor</button>
    <div id="cores">
        <div class="holdCardsTam">
            <input class="inputs" type="text" name="cor[]" placeholder="cor">
            <div class="divHoldCheck"><input class="inputs" type="checkbox" name="disponibilidadeCor[]" placeholder="Disponibilidade"></div>
        </div>
    </div>
    <button id="maisTamanho" class="btnsBordersBottomLess">Adicionar Tamanho</button>
    <div id="tamanhos">
      <div class="holdCardsTam">
        <input class="inputs" type="text" name="tamanho[]" placeholder="Tamanho">
        <input class="inputs" type="text" name="preco[]" placeholder="Preco">
        <div class="divHoldCheck"><input class="checkboxs" type="checkbox" name="disponibilidadeCor[]" placeholder="Disponibilidade"></div>
      </div>

      <!--<div class="holdCardsTam">
        <div class="divTamPreco">
            <input class="inputs" type="text" name="tamanho[]" placeholder="Tamanho">
            <input class="inputs" type="text" name="preco[]" placeholder="Preco">
        </div>
        <button class="btnsConfirm">
            <label>
                Disponível 
                <input type="checkbox" class="checkDisIndis" name="availability">
            </label>
        </button>
      </div>-->
    </div>
    <input type="submit" name="submit" class="btnsBorders" value="Cadastrar">
</form>
      </section>
</body>
</html>

<!--<script type="application/x-javascript" defer>
  
</scrip>-->