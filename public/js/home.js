AOS.init();
const headerImages = ['image1.webp', 'image5.webp', 'image5.jpg']
let headerImagesActiveNumber = 0

function changeHeaderImage(num){
    headerImagesActiveNumber += num
    if(headerImagesActiveNumber === 3){
        headerImagesActiveNumber = 0
    }
    if(headerImagesActiveNumber === -1){
        headerImagesActiveNumber = 2
    }
    document.querySelector('.nav').style.backgroundImage = 'url(../images/'+headerImages[headerImagesActiveNumber]+')'
}

document.querySelector('.fa-angle-left').addEventListener('click', () => {
    changeHeaderImage(-1)
})
document.querySelector('.fa-angle-right').addEventListener('click', ()=> {
    changeHeaderImage(1)
})

function aboutus(){
    window.location.href='/about.html'
}







