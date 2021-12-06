/* ========== Menu Show Y Hidden ============*/ 

const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* === Menu Show === */
/* Validate if const exists */

if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/* === Menu Hidden === */
/* Validate if const exists */

if(navClose){
    navClose.addEventListener('click', ()=>{
        navMenu.classList.remove('show-menu')
    })
}

/* === Remove Menu Mobile === */ 

const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/* =============== Store.html =================*/ 

/* ========== Menu Show Y Hidden ============*/ 

const storeMenu = document.getElementById('store__category-menu'),
      storeToggle = document.getElementById('store-toggle'),
      storeClose = document.getElementById('store-close')

/* === Menu Show === */
/* Validate if const exists */

if(storeToggle){
    storeToggle.addEventListener('click', () =>{
        storeMenu.classList.add('show-store-menu')
    })
}

/* === Menu Hidden === */
/* Validate if const exists */

if(storeClose){
    storeClose.addEventListener('click', ()=>{
        storeMenu.classList.remove('show-store-menu')
    })
}

/* === Remove Menu Mobile === */ 

const storeLink = document.querySelectorAll('.store__link')

function storelinkAction(){
    const storeMenu = document.getElementById('store__category-menu')
    // When we click on each nav__link, we remove the show-menu class
    storeMenu.classList.remove('store__category-menu')
}
storeLink.forEach(n => n.addEventListener('click', storelinkAction))



/*==================== SHOW SCROLL UP ====================*/ 

function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)