// companies.blade.php
const cards = document.querySelectorAll('.card-entreprise');

cards.forEach(card => {
    const id = card.getAttribute('id');
    card.addEventListener('click', () => {
        window.location.href = 'companies/card/'+id;
    });
});