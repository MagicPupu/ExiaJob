const cards = document .querySelectorAll('.card-entreprise');

cards.forEach(card => {
    card.addEventListener('click', () => {
        window.location.href = '/';
    });
});