const contenuMenu = document.querySelector('.container-menu')
const btnMenu = document.querySelector('.btn-menu')


btnMenu.addEventListener('click', () => {
    contenuMenu.classList.toggle('active')
})