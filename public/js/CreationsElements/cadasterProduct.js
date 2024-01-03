let divCores = document.getElementById('cores'),
divTamanhos= document.getElementById('tamanhos'),
btnMaisCor = document.getElementById('maisCor'),
btnMaisTamanho=document.getElementById('maisTamanho');

btnMaisCor.addEventListener('click', () => {
    let divHoldCardsCor = document.createElement('div')
    divHoldCardsCor.classList.add('holdCardsTam')
    let inputCor = document.createElement('input')
    inputCor.classList.add('inputs')
    inputCor.type = 'text'
    inputCor.placeholder = 'Cor'
    inputCor.name = 'cor[]'
    let divHoldCheck = document.createElement('div')
    divHoldCheck.classList.add('divHoldCheck')
    let inputDis = document.createElement('input')
    inputDis.type = 'checkbox'
    inputDis.name = 'disponibilidadeCor[]'
    divHoldCheck.append(inputDis)
    divHoldCardsCor.append(inputCor, divHoldCheck)
    divCores.append(divHoldCardsCor)
})

btnMaisTamanho.addEventListener('click', () => {
    let divHoldCardsCor = document.createElement('div')
    divHoldCardsCor.classList.add('holdCardsTam')
    let inputTam = document.createElement('input')
    inputTam.classList.add('inputs')
    inputTam.type = 'text'
    inputTam.placeholder = 'Tamanho'
    inputTam.name = 'tamanho[]'
    let inputPreco = document.createElement('input')
    inputPreco.classList.add('inputs')
    inputPreco.type = 'text'
    inputPreco.placeholder = 'Preço'
    inputPreco.name = 'preco[]'
    let divHoldCheck = document.createElement('div')
    divHoldCheck.classList.add('divHoldCheck')
    let inputDis = document.createElement('input')
    inputDis.type = 'checkbox'
    inputDis.name = 'disponibilidadeCor[]'
    divHoldCheck.append(inputDis)
    divHoldCardsCor.append(inputTam, inputPreco,divHoldCheck)
    divTamanhos.append(divHoldCardsCor)
})

/*
function criaInput(nomeInput, placeholder, tipo = "text"){
let div = document.createElement('div')
div.classList.add('holdCardsTam')
let input = document.createElement("input");
    input.type = tipo;
    input.placeholder = placeholder;
    input.name = nomeInput;
    if (tipo == "checkbox") input.checked = true
    div.append(input)
return div;
}

btnMaisCor.onclick = (e) => {
e.preventDefault();
divCores.append(
    criaInput('cor[]','Cor'),
    criaInput('disponibilidadeCor[]','Disponibilidade','checkbox'),
    (() => {return document.createElement('br')})()
);
}
btnMaisTamanho.onclick = (e) => {
e.preventDefault();
divTamanhos.append(
    criaInput('tamanho[]','Tamanho'),
    criaInput('preco[]','Preco'),
    criaInput('disponibilidadeTamanho[]','Disponibilidade','checkbox'),
    (() => {return document.createElement('br')})()
)
}*/