/*menu*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

if(navToggle) {
    navToggle.addEventListener('click', () =>  {
        navMenu.classList.add('show-menu')
    })
}

if(navClose) {
    navClose.addEventListener('click', () =>  {
        navMenu.classList.remove('show-menu')
    })
}

/* remove menu mobile*/
const navLink = document.querySelectorAll('.navLink')

function linkAction() {
    const navMenu = document.getElementById('nav-menu')

    navMenu.classList.remove('show-menu')
}

navLink.forEach(n =>  n.addEventListener('click', linkAction))

/*swiper nuevos slider */

let contestSwiper = new Swiper (".contest-swiper", {
    centeredSlides: true,
    slidesPerView: 1,
    loop: 'true',
    spaceBetween: 16,
})

let aboutSwiper = new Swiper(".about-swiper",{
    centeredSlides: false,
    slidesPerView: 1,
    loop: 'true',
    spaceBetween: 16,
})



/*Background header*/

function scrollHeader() {
    const header = document.getElementById('header')
    if(this.scrollY >= 50) header.classList.add('scroll-header'); 
    else header.classList.remove('scroll-header');
}
window.addEventListener('scroll', scrollHeader)

/*scroll section*/
const sections = document.querySelectorAll('section[id]')

function scrollActive() {
    const scrollY = window.pageYOffset 
    sections.forEach(current =>  {
        const sectionHeight = current.offsetHeight,
        sectionTop = current.offsetTop -58,
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document.querySelector('.navM a[href*='+ sectionId + ']').classList.add('active-link')
        }
        else {
            document.querySelector('.navM a[href*='+ sectionId + ']').classList.remove('active-link')
        }
    } )
}
window.addEventListener('scroll', scrollActive)


/*scroll up*/


function scrollUp() {
    const scrollUp = document.getElementById('scroll-up');
    if(this.scrollY >= 460 ) scrollUp.classList.add('show-scroll');
    else scrollUp.classList.remove('show-scroll')
}

window.addEventListener('scroll', scrollUp)


/*Animation*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 300
})

sr.reveal(`.home-swiper, .contest-swiper, .about-swiper, .projectcontent`)
sr.reveal(` .footercontent`, {interval: 100})

//about links
document.getElementById('linkedinDuvan').addEventListener('click', function() {
    window.location.href = 'https://www.linkedin.com/in/duvan-sepulveda-0a60b4242/'; 
});

document.getElementById('linkedinAcevedo').addEventListener('click', function() {
    window.location.href = 'https://www.linkedin.com/in/andres-santiago-acevedo-mancera-3873b8232/'; 
});

document.getElementById('linkedinAngel').addEventListener('click', function() {
    window.location.href = 'https://www.linkedin.com/in/afmartinezf/'; 
});

document.getElementById('linkedinCarlos').addEventListener('click', function() {
    window.location.href = 'https://www.linkedin.com/in/carlos-alberto-cort%C3%A9s-ram%C3%ADrez-89a47b1bb'; 
});

document.getElementById('linkedinAlejandro').addEventListener('click', function() {
    window.location.href = 'https://www.linkedin.com/in/dcifuentesg/'; 
});

//projects links
document.getElementById('planetas').addEventListener('click', function() {
    window.location.href = 'https://www.kaggle.com/code/crescendolls/planetsprediction'; 
});

document.getElementById('dogCat').addEventListener('click', function() {
    window.location.href = 'https://www.kaggle.com/code/crescendolls/dogsvscats'; 
});

document.getElementById('cifar').addEventListener('click', function() {
    window.location.href = 'https://www.kaggle.com/code/crescendolls/cifar-clasificacion'; 
});
//contest links
document.getElementById('bancolombia').addEventListener('click', function() {
    window.location.href = 'https://bit.ly/3P7MqJu'; 
});

document.getElementById('BancoBBVA').addEventListener('click', function() {
    window.location.href = 'https://www.bbva.pe/personas/data-challenge.html#participantes'; 
});