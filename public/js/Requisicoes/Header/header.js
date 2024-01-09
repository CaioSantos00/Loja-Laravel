let addMenu = document.getElementById('addMenu')
let removeMenu = document.getElementById('removeMenu')
let nav = document.querySelector('nav')
addMenu.addEventListener('click', ()=> {
	nav.classList.add('navMenu')
    nav.style.transform = 'translateY(0)'
	console.log(nav)
})

removeMenu.addEventListener('click', ()=> {
	//nav.classList.remove('navMenu')
    nav.style.transform = 'translateY(-100%)';
})
