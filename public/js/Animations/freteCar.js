let divFrete = document.getElementById('divFrete'),
    divInputFrete = document.getElementById('divInputFrete')
let descriptionFalseTrue = false

divFrete.addEventListener('click', () =>{
    descriptionFalseTrue = !descriptionFalseTrue

    divFrete.style.overflow = 'visible'
    divFrete.style.height = '100%'
    divInputFrete.style.transform = 'translateY(0px)'
})