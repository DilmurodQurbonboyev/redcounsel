AOS.init();

const choose = document.querySelectorAll('.main-link'), chosen = document.querySelectorAll('#main')

for(let i=0; i<5; i++){
    choose[i].addEventListener('click', () => {
        invoke()
        chosen[i].classList.add('active')
        choose[i].classList.add('active-link')
    })
}
function invoke(){
    for(let i=0; i<5; i++){
        chosen[i].classList.remove('active')
        choose[i].classList.remove('active-link')
    }
}
