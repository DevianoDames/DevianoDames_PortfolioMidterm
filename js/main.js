$(document).ready(function() {
    $('#contactForm').submit(function(e) {
        e.preventDefault(); // Prevent default form submission

        // Serialize form data
        var formData = $(this).serialize();

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: 'http://localhost:8888/DevianoDames_PortfolioMidterm/sendmail.php',
            data: formData,
            success: function(response) {
                
                console.log(response); 
                alert('Message sent successfully!'); 
            },
            error: function(xhr, status, error) {
              
                console.error(xhr.responseText); 
                alert('Error sending message. Please try again.'); 
            }
        });
    });
});



let hamMenu = document.querySelector('#ham-menu'); 
let navbar = document.querySelector('.navbar');

hamMenu.onclick = () => {
    hamMenu.classList.toggle('fa-xmark');
    navbar.classList.toggle('active');
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
};

ScrollReveal({
    distance:'80px',
    duration: 2000,
    delay: 200
});

ScrollReveal().reveal('.intro-content, .heading', {origin: 'top'});
ScrollReveal().reveal('.intro-img, .services-container, .portfolio-box, .contact form,.portfolio-box2', {origin: 'bottom'});
ScrollReveal().reveal('.intro-content h1, .about-img, .project-info h3', {origin: 'left'});
ScrollReveal().reveal('.intro-content p, .about, .project-info p', {origin: 'right'});
