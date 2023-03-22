let radioLocalBtns = document.querySelectorAll("input[name='localitions']");

let findLocalSelected = () => {
    let selected = document.querySelector("input[name='localitions']:checked").value;
    console.log(selected);
}

radioLocalBtns.forEach(radioBtn => {
    radioBtn.addEventListener("change", findLocalSelected);
})

let radioSalaryBtns = document.querySelectorAll("input[name='salarys']");

let findSalarySelected = () => {
    let selected = document.querySelector("input[name='salarys']:checked").value;
    console.log(selected);
}

radioSalaryBtns.forEach(radioBtn => {
    radioBtn.addEventListener("change", findSalarySelected);
})

let radioDateBtns = document.querySelectorAll("input[name='dates']");

let findDateSelected = () => {
    let selected = document.querySelector("input[name='dates']:checked").value;
    console.log(selected);
}

radioDateBtns.forEach(radioBtn => {
    radioBtn.addEventListener("change", findDateSelected);
})

let radioExperienceBtns = document.querySelectorAll("input[name='experiences']");

let findExperienceSelected = () => {
    let selected = document.querySelector("input[name='experiences']:checked").value;
    console.log(selected);
}

radioExperienceBtns.forEach(radioBtn => {
    radioBtn.addEventListener("change", findExperienceSelected);
})

const ul = document.querySelector("#input-tag"),
    input = ul.querySelector("input");
countNumb = document.querySelector(".details span");

let maxTags = 10,
    tags = [];

counTag();

function counTag() {
    input.focus();
    countNumb.innerText = maxTags - tags.length;
}

function createTag() {
    ul.querySelectorAll("li").forEach(li => li.remove());
    tags.slice().reverse().forEach(tag => {
        let liTag = `<li>${tag} <i class="fa-solid fa-xmark" onclick="remove(this, '${tag}')"></i></li>`;
        ul.insertAdjacentHTML("afterbegin", liTag);
    })
    counTag();
}

function remove(element, tag) {
    let index = tags.indexOf(tag);
    tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
    element.parentElement.remove();
    counTag();
}

function addTag(e) {
    if (e.key == "Enter") {
        let tag = e.target.value.replace(/\s+/g, ' ');
        if (tag.length > 1 && !tags.includes(tag)) {
            if (tags.length < 10) {
                tag.split(',').forEach(tag => {
                    tags.push(tag);
                    createTag();
                })
            }
        }
        e.target.value = "";
    }

}

input.addEventListener("keyup", addTag);

const removeBtn = document.querySelector(".details button");
removeBtn.addEventListener("click", () => {
    tags.length = 0;
    ul.querySelectorAll("li").forEach(li => li.remove());
    counTag();
})


const cards = document.querySelectorAll('.offre-detail');

cards.forEach(card => {
    const id = card.getAttribute("id")
    card.addEventListener('click', () => {
        window.location.href = 'offers/card/'+id;
    })
})