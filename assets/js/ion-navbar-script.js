'use_strict';

const navbarElement     = document.getElementById('navbarTop');
const iconElement       = document.getElementById('topLogoIcon');
const toggleVertical    = document.getElementById('toggleVertical');
const toggleLg          = document.getElementById('toggleVertical');
const isMobile          = window.matchMedia("(max-width: 767px)");
const pixelsAmount      = '2';

window.addEventListener('scroll', function(){

    if(window.scrollY > pixelsAmount){
    	navbarElement.classList.add('scroll-top-navbar');
        iconElement.classList.remove('bi-r-square');
        iconElement.classList.add('bi-r-square-fill');
    }else{
      navbarElement.classList.remove('scroll-top-navbar');
      iconElement.classList.remove('bi-r-square-fill');
        iconElement.classList.add('bi-r-square');
    }

});

// Verifica se é mobile para gerar background constante
if(isMobile.matches){
    navbarElement.classList.add('scroll-top-navbar-mobile');
}else{
    navbarElement.classList.remove('scroll-top-navbar-mobile');
}

isMobile.addEventListener('change', function(){

    if(isMobile.matches){
        navbarElement.classList.add('scroll-top-navbar-mobile');
    }else{
        navbarElement.classList.remove('scroll-top-navbar-mobile');
    }

});

