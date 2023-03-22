const skillsList = [
    "C++",
    "C",
    "C#",
    "HTML",
    "CSS",
    "JAVA",
    "PHP",
    "JavaScript",
    "Python",
    "SQL",
    "Access",
    "Packet tracer",
    "CMS",
    "Kotlin",
    "Swift",
    "Visual Studio",
    "R",
    "Ruby",
    "Gestion administrative",
    "Gestion de projet",
    "Comptabilité",
    "Marketing",

];

const skillsSelect = document.getElementById("skills");
const searchInput = document.getElementById("search");
const selectedSkillsList = document.getElementById("selected-skills-list");

function createOption(skill) {
    const option = document.createElement("option");
    option.value = skill;
    option.text = skill;
    return option;
}

function updateSkillsList(filteredSkills) {
    skillsSelect.innerHTML = "";
    for (const skill of filteredSkills) {
        skillsSelect.add(createOption(skill));
    }
}

function selectSkill(skill) {
    if (selectedSkillsList.childElementCount < 3) {
        const listItem = document.createElement("li");
        listItem.textContent = skill;
        selectedSkillsList.appendChild(listItem);
    }
}

function filterSkills(search) {
    return skillsList.filter(skill =>
        skill.toLowerCase().includes(search.toLowerCase())
    );
}

skillsSelect.addEventListener("change", () => {
    selectSkill(skillsSelect.value);
});

searchInput.addEventListener("input", () => {
    const filteredSkills = filterSkills(searchInput.value);
    updateSkillsList(filteredSkills);
});

function removeSelectedSkill(event) {
    const listItem = event.target;
    selectedSkillsList.removeChild(listItem);
}

function selectSkill(skill) {
    if (selectedSkillsList.childElementCount < 3) {
        const listItem = document.createElement("li");
        listItem.textContent = skill;
        listItem.addEventListener("click", removeSelectedSkill);
        selectedSkillsList.appendChild(listItem);
    }
}



// Initialisation
updateSkillsList(skillsList);