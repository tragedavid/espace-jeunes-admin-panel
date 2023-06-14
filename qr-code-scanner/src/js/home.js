// Script pour ouvrir/fermer le menu hamburger
const menuIcon = document.querySelector('.menu-icon');
const menu = document.querySelector('.menu');

menuIcon.addEventListener('click', () => {
    menu.classList.toggle('open');
});

// Fermer le menu hamburger lorsque vous cliquez en dehors du menu
document.addEventListener('click', (event) => {
    const target = event.target;
    if (!menu.contains(target) && !menuIcon.contains(target)) {
        menu.classList.remove('open');
    }
});
