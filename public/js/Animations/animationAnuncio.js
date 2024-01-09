let cardsProdu = document.querySelectorAll('.aCard')
let logoCarregando = document.getElementById("loading")

function carregarProximaPagina(e) {
  e.preventDefault()
    logoCarregando.style.display = "flex";
    console.log('Funciona')
    setTimeout(function() {
        console.log('Funciona o set')
      window.location.href = "/produto";
      logoCarregando.style.display = 'none'
    }, 3000);
  }

  cardsProdu.forEach((cadaEle) => {
    cadaEle.addEventListener('click', carregarProximaPagina)
  })
