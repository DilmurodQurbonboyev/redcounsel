AOS.init();
const activePlus = document.querySelectorAll('#text span'), subMenu = document.querySelectorAll('#submenu')

for(let i=0; i<3; i++){
    activePlus[i].addEventListener('click', ()=>{
        for(let j=0; j<3; j++){
            if(j !== i){
                subMenu[j].classList.remove('active')
                activePlus[j].classList.remove('plusActive')
            }
        }
        subMenu[i].classList.toggle('active')
        activePlus[i].classList.toggle('plusActive')
    })
}
