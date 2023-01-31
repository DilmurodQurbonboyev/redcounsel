AOS.init();

document.querySelector('.res-box').addEventListener('click', () => {
    document.querySelector('.res-menu').classList.toggle('res-active')
})

const resActive = ['one', 'two', 'three']
document.querySelector('.res-box').addEventListener('click', () => {
    for(let i=0; i<3; i++){
        document.querySelectorAll('.res-box div')[i].classList.toggle(resActive[i])
    }
})

document.querySelector('#call i').addEventListener('click', ()=>{
    document.querySelector('#call i').classList.toggle('icon')
    document.querySelector('#call div').classList.toggle('iconActive')
})

const links = document.querySelectorAll('#links a')
for(let i=0; i<links.length; i++){
    links[i].addEventListener('click', ()=>{
        location.reload()
    })
}

const allLang = ['en', 'ru']
const select = document.querySelector('select')

select.addEventListener('change', changeURLLanguage)
select.value = localStorage.getItem('selected')

function changeURLLanguage() {
    let lang = select.value;
    location.href = window.location.pathname + '#' + lang;
    localStorage.setItem('selected', select.value)
    location.reload();
}

function changeLanguage() {
    let hash = localStorage.getItem('selected');
    
    if (!allLang.includes(hash)) {
        location.href = window.location.pathname + '#en';
        hash = 'en'
    }

    select.value = hash;
    
    for (let key in lang) {
        let elem = document.querySelector("."+key);
    
        if (elem) {
            elem.innerHTML = lang[key][hash];
        }
    }
}

function openbtn() {
    let sidebar = document.querySelector(".sidebar");
    // let sidebar1 = document.querySelector('.sidebar').style.display ='flex'
    if (sidebar.style.display === "none") {
      sidebar.style.display = "block" && "flex";
    } else {
      sidebar.style.display = "none";
    }
  }

