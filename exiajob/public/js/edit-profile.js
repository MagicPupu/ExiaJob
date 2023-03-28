const skillForm = document.getElementById('skill-form');

skillForm.addEventListener('submit', function (event) {
    event.preventDefault();

    const skills1 = Array.from(document.getElementsByName('skills1')[0].selectedOptions).map(option => option.value);
    const skills2 = Array.from(document.getElementsByName('skills2')[0].selectedOptions).map(option => option.value);
    const skills3 = Array.from(document.getElementsByName('skills3')[0].selectedOptions).map(option => option.value);

    const allSkills = [...skills1, ...skills2, ...skills3];

    console.log(allSkills);
    // do something with selected skills here
});