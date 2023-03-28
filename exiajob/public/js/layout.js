document.addEventListener('DOMContentLoaded', function () {
    const hamburgerMenu = document.createElement('span');
    hamburgerMenu.classList.add('hamburger-menu');
    hamburgerMenu.innerHTML = '&#9776;'; // Hamburger menu icon

    const header = document.querySelector('header');
    header.appendChild(hamburgerMenu);

    const nav = document.querySelector('nav');

    // Toggle the 'nav-active' class on the 'nav' element when the hamburger menu is clicked
    hamburgerMenu.addEventListener('click', function () {
        nav.classList.toggle('nav-active');
    });
});