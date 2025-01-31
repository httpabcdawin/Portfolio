let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active')
        })
    }
})
}

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

document.addEventListener('DOMContentLoaded', function() {
    particlesJS("particles-js", {
        particles: {
            number: { value: 100 },
            color: { value: "#ffffff" },
            size: { value: 3 },
            move: { enable: true, speed: 6 }
        },
        interactivity: {
            events: {
                onhover: { enable: true, mode: "repulse" },
                onclick: { enable: true, mode: "push" }
            }
        }
    });
});

const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");
const projectContainer = document.querySelector('.project-container');
const projects = document.querySelectorAll('.project-card');

let currentIndex = 0;

function updateProjects() {
    projects.forEach((project, index) => {
        project.style.opacity = index === currentIndex ? "1" : "0.5";
        project.style.transform = `translateX(${-currentIndex * 100}%)`;
    });

    // Disable prev if at the first project
    prevBtn.disabled = currentIndex === 0;
    
    // Disable next if at the last project
    nextBtn.disabled = currentIndex === projects.length - 1;
}

nextBtn.addEventListener("click", () => {
    if (currentIndex < projects.length - 1) {
        currentIndex++;
        updateProjects();
    }
});

prevBtn.addEventListener("click", () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateProjects();
    }
});

// Initialize
updateProjects();
