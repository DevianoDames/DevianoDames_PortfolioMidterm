const projectList = document.querySelector(".project-list");

// Add this code to make the project navigation display horizontally
projectList.style.display = "flex";
projectList.style.justifyContent = "center"; // You can adjust this based on your layout needs

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
});

document.querySelectorAll(".nav-link").forEach(n => n.
    addEventListener("click", () => {
        hamburger.classList.remove("active");
    }));