let header = document.querySelector('header'), 
    headerH = document.querySelector('header').clientHeight;

document.onscroll = function () {
    let scroll = window.scrollY;

    if (scroll > headerH){
        header.classList.add('fixed');
        document.body.style.paddingTop = headerH + 'px';
    } else {
        header.classList.remove('fixed');
        document.body.removeAttribute('style');
    }
}

// mouve start
let lap = document.querySelector('.lap');
let mouve = document.querySelector('.lap .mouve');

lap.addEventListener('mousemove', ()=>{
    mouve.style.display = 'block';
})
lap.addEventListener('mouseout', ()=>{
    mouve.style.display = 'none';
});
// mouve end
// menu start
let body = document.querySelector('body');
let mainUl = document.querySelector('.main-ul');
let headeri = document.querySelector('header .logo i')
let back = document.querySelector('.back');

headeri.addEventListener('click', ()=>{
    mainUl.classList.add('active');
    body.classList.add('active');
})
back.addEventListener('click', ()=>{
    mainUl.classList.remove('active');
    body.classList.remove('active');
})
//  menu end
// ul move start
let mobilei = document.querySelector('.iTouch');
let li = document.querySelector('.mobile');
let mobileUl = document.querySelector('.mobileUl');

mobilei.addEventListener('click', ()=>{
    li.classList.toggle('active');
    mobileUl.classList.toggle('active');
    mobilei.classList.toggle('active');
})

// ul move end