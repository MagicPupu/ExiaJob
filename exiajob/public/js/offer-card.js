var btn = document.getElementById('btn');

function Toggle() {
    if (btn.classList.contains("far")) {
        btn.classList.remove("far");
        btn.classList.add("fas");
    } else {
        btn.classList.remove("fas");
        btn.classList.add("far");
    }
}


const postuler = document.querySelector('.postuler');
const id = postuler.getAttribute("id");

console.log(id);

postuler.addEventListener('click', () => {
    window.location.href = '/offers/candidate/'+id;
})