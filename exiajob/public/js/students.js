const cards = document.querySelectorAll('.card-etudiant');

cards.forEach(card => {
    const id = card.getAttribute('id');
    card.addEventListener('click', () => {
        window.location.href = 'students/card/'+id;
    });
});