// script.js

// Add functionality or interactivity (e.g., form submission with AJAX, smooth scrolling, etc.)
document.addEventListener('DOMContentLoaded', function() {
    // Example: Smooth scrolling to sections
    const links = document.querySelectorAll('nav .navbar-nav a');
// Example for demo interaction (basic JavaScript)
document.querySelector('.demo-btn').addEventListener('click', function() {
    alert('Launching AI Personal Voice Assistant!');
    // You can replace this alert with actual AI interaction logic

    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            window.scrollTo({
                top: targetElement.offsetTop - 50,
                behavior: 'smooth'
            });
        });
    });
});
});