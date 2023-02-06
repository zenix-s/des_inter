const dropdown_button = document.getElementById('dropdown_button');
const dropdown_menu = document.getElementById('dropdown_menu');

dropdown_button.addEventListener('click', () => {
    dropdown_menu.classList.toggle('visible');
});

window.addEventListener('click', (e) => {
    // if e.target !== dropdown_button or his child and dropdown_menu is not hidden
    if (!dropdown_button.contains(e.target) && dropdown_menu.classList.contains('visible')) {
        dropdown_menu.classList.remove('visible');
    }
});