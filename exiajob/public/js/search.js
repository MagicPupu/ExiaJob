const cards = document.querySelectorAll('.offre-detail');

cards.forEach(card => {
    const id = card.getAttribute('id');
    card.addEventListener('click', () => {
        window.location.href = 'offers/card/'+id;
    })
})