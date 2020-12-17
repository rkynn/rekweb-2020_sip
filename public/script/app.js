const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links ');
    const navLinks = document.querySelectorAll('.nav-links li');


    burger.addEventListener('click', () => {
        //Toggle Nav 
        nav.classList.toggle('nav-active');

        // Animasi Links
        navLinks.forEach((link, index) => {
            if(link.style.animation){
                link.style.animation ='';
            } else {
                link.style.animation = `navLinkFade 0.5 ease forwards ${index / 7 + 2.3}s`;
            }
        });

        // Animasi Burger
        burger.classList.toggle('toggle');

    });

}
navSlide();