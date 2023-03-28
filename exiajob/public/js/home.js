const entreprises = document.querySelectorAll('.card-entreprise');
const students = document.querySelectorAll('.card-etudiant');

entreprises.forEach(card => {
    const id = card.getAttribute('id');
    card.addEventListener('click', () => {
        window.location.href = 'companies/card/'+id;
    });
});

students.forEach(card => {
    const id = card.getAttribute('id');
    card.addEventListener('click', () => {
        window.location.href = 'students/card/'+id;
    })
})