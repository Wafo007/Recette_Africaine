window.addEventListener('scroll', function(){
    const header = this.document.querySelector('.header');
    header.classList.toggle("sticky", this.window.scrollY > 0);
});

const menuHamburger = document.querySelector(".Menu-Hambuger")
const navLinks = document.querySelector(".entete")
 
    menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu')
    })

