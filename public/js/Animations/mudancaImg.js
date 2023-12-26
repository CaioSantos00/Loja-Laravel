let btnDireita = document.getElementById('btnDireita'),
	caixaFotoAnuncio = document.getElementById('caixaFotoAnuncio'),
	btnEsquerda = document.getElementById('btnEsquerda'),
	mudaImg = document.getElementById('mudaImg'),
	nomeAnun = document.getElementById('nameAnun'),
	datePre = document.getElementById('datePrevia'),
	number = 0,
	btnsDireEsq = document.getElementById('btnDireEsquer'),
    arrayImgs = ['/imgs/camFrenteL.png', '/imgs/camCostasV.png']

mudaImg.src = arrayImgs[0]    
    btnDireita.addEventListener('click', function (){
        if (arrayImgs) {
            if (number < arrayImgs.length - 1) {
                mudaImg.src = arrayImgs[++number];
            } else {
                number = 0;
                mudaImg.src = arrayImgs[number];
            }
            console.log(arrayImgs[number]);
        } else {
            number = 0;
            mudaImg.src = arrayImgs[number];
        }
    })
        
    btnEsquerda.addEventListener('click', function () {
        if (arrayImgs) {
            if (number > 0) {
                mudaImg.src = arrayImgs[--number];
            } else {
                number = arrayImgs.length - 1;
                mudaImg.src = arrayImgs[number];
            }
            console.log(arrayImgs[number]);
        } else {
            number = 0;
            mudaImg.src = arrayImgs[number];
        }
    })


    let divBoxDescri = document.getElementById('divBoxDescri')
    let description = document.getElementById('description')
    let descriptionFalseTrue = false

    divBoxDescri.addEventListener('click', () => {
        descriptionFalseTrue = !descriptionFalseTrue
        console.log(descriptionFalseTrue)
        description.style.visibility = 'visible'
        description.style.transform = 'translateY(0)'
        divBoxDescri.style.height = '100%'
        if (!descriptionFalseTrue) {
        description.style.visibility = 'hidden'
        description.style.transform = 'translateY(100%)'
        divBoxDescri.style.height = '20px'
        }
    })