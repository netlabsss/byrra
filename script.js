document.addEventListener('DOMContentLoaded', function() {
    const icons = document.querySelectorAll('.icon-dynamic');

    function randomPosition(icon) {
        icon.style.top = `${Math.random() * (window.innerHeight - 50)}px`;
        icon.style.left = `${Math.random() * (window.innerWidth - 50)}px`;
    }

    icons.forEach(icon => {
        randomPosition(icon);
        icon.addEventListener('mouseenter', () => {
            icon.classList.add('fa-spin');
        });
        icon.addEventListener('mouseleave', () => {
            icon.classList.remove('fa-spin');
        });
    });

    // Dynamic welcome message based on time
    const greet = document.querySelector('.hero h2');
    const now = new Date().getHours();
    if (now < 12) greet.textContent = 'Bonne matinée et bienvenue chez Netlabs!';
    else if (now < 18) greet.textContent = 'Bonne après-midi et bienvenue chez Netlabs!';
    else greet.textContent = 'Bonne soirée et bienvenue chez Netlabs!';

    // Background color animation for the whole page
    document.body.style.animation = 'changeColor 30s infinite alternate';
});
