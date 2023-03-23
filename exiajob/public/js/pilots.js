const cards = document.querySelectorAll('.card-pilot');

cards.forEach(card => {
    const id = card.getAttribute('id');
    card.addEventListener('click', () => {
        window.location.href = 'pilots/card/'+id;
    })
})