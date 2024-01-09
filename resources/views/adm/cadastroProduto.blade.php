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
      <form id="formProduct" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="titleForms">Cadastrar Produto</div>
      <label>
        Produto disponível ?
        <input type="checkbox" name="availability" value="1" @checked(old('availability') !== null)>
    </label>
    <input class="inputs" type="text" name="name" placeholder="Nome do produto" required value="{{ old('name') }}">
    <textarea class="inputs" name="description" placeholder="Descrição do produto" required>
    {{ old('description') }}
    </textarea>
    <input class="inputFile inputs" type="file" name="pictures[]" multiple required>
    <button id="maisCor" class="btnsBordersBottomLess">Adicionar cor</button>
    <div id="cores">
    @if(old('cor'))
        @foreach(old("cor") as $indiceCor => $dadosCor)
        <!--
        NÃO APAGAR OS COMENTS
        <div class="holdCardsTam">
            <input class="inputs" type="text" name="cor[]" placeholder="cor">
            <div class="divHoldCheck"><input class="inputs" type="checkbox" name="disponibilidadeCor[]" placeholder="Disponibilidade"></div>
        </div>-->
        @endforeach
    @endif
    </div>
    <button id="maisTamanho" class="btnsBordersBottomLess">Adicionar Tamanho</button>
    <div id="tamanhos">
    @if(old('tamanho'))  
        @foreach(old('tamanho') as $indiceTamanho => $dadosTamanho)
     <!-- 
      NÃO APAGAR OS COMENTS
      <div class="holdCardsTam">
        <input class="inputs" type="text" name="tamanho[]" placeholder="Tamanho">
        <input class="inputs" type="text" name="preco[]" placeholder="Preco">
        <div class="divHoldCheck"><input class="checkboxs" type="checkbox" name="disponibilidadeCor[]" placeholder="Disponibilidade"></div>
      </div>-->
      @endforeach
    @endif
    </div>
    <input type="submit" name="submit" class="btnsBorders" value="Cadastrar">
</form>
      </section>
</body>
</html>
