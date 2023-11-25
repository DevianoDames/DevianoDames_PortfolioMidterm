/* Navbar toggle*/

let hamMenu = document.querySelector('#ham-menu'); 
let navbar = document.querySelector('.navbar');

hamMenu.onclick = () => {
    hamMenu.classList.toggle('fa-xmark');
    navbar.classList.toggle('active');

    navbar.style.display = navbar.classList.contains('active') ? 'block' : 'none';
};

let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');



window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');
        
        console.log('id:', id);
        
        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
        }
    });
    /*============== Navbar ==============*/
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    hamMenu.classList.remove('fa-xmark');
    navbar.classList.remove('active');
    navbar.style.display = 'none';

};
