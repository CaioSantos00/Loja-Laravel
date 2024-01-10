<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYX | Início</title>
    <link rel="stylesheet" href="/css-atual/style.css">
    <link rel="icon" type="image/x-icon" href="/imgs/Oficial.gif">
    <script>
        let arrayImgs = {{ Js::from(array_map(fn($pic) => asset("products/{$pic}"), $product->pictures)) }},            
            arrayPrecos = {{ Js::from($product->sizes->map(
                fn($size) => ["tamanho" => $size->size, "preco" => $size->price])) }};
    </script>
    <script src="/js/Animations/mudancaImg.js" defer></script>    
    <script src="/js/Requisicoes/Header/header.js" defer></script>
</head>
<body>
    <x-header/> 
    <main>   
    <section>    
        <div id="caixaAnuncio">
            <div id="fotosAnuncio">
                <button id="btnEsquerda" class="btnDireEsquer"><svg width="25px" height="25px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#ffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#ffff"></path></g></svg></button>
                <div id="caixaFotoAnuncio">
                    <img src="/imgs/camFrenteL.png" alt="" class="imgsAnuncio" id="mudaImg">
                </div>
                <button id="btnDireita" class="btnDireEsquer"><svg width="25px" height="25px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#ffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#ffff"></path></g></svg></button>

            </div>
            <div id="infoAnuncio">
                <div id="nameAnun" class="title">{{ $product->data->name }}</div>
                <div class="riscoQuebra"></div>
                <div id="divPreco">Preço: R$100,00</div>
                <div class="riscoQuebra"></div>
                <div id="size" class="titleAnun">Tamanho</div>
<<<<<<< Updated upstream
                <div id="divSize">
                    @foreach($product->sizes as $size)
                        <button class="btnsBordersBottomLess" data-tamanho="{{$size->size}}">
                            {{ $size->size }}
                        </button>
                    @endforeach                    
=======
                <div class="divSize">
                    <button class="btnsBordersBottomLess">PP</button>
                    <button class="btnsBordersBottomLess">P</button>
                    <button class="btnsBordersBottomLess">M</button>
                    <button class="btnsBordersBottomLess">G</button>
                    
                </div>
                
                <div class="riscoQuebra"></div> 
                <div id="divColorsDis">
                    <button class="btnsColorProduct"><div class="qualCor"></div>Azul</button>
                    <button class="btnsColorProduct"><div class="qualCor"></div>Vermelho</button>
                    <button class="btnsColorProduct"><div class="qualCor"></div>Preto</button>
                    <button class="btnsColorProduct"><div class="qualCor"></div>Azul Royal</button>
                    
>>>>>>> Stashed changes
                </div>
                <div class="riscoQuebra"></div> 
                <div id="holdAddSacoDescri">
                <div id="divSaco">
                    <a href="/carrinho"><button class="btnsBorders">Comprar</button></a>
                    <a href="/carrinho"><button class="btnsBorders">Adicionar à sacola</button></a>
                </div>
                <div id="divBoxDescri" class="divBoxDescri">
                    <div id="sobrePeca">Sobre a peça</div>
                <div id="description">
                    {{ $product->data->description }}
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</main>
    <footer>
        COPYRIGHT ©
    </footer>
</body>
</html>