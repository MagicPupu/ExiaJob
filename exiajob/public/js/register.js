document.addEventListener("DOMContentLoaded", function () {

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('imagePreview').style.backgroundImage = 'url(' + e.target.result + ')';
                document.getElementById('imagePreview').style.display = 'none';
                document.getElementById('imagePreview').style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    document.getElementById("imageUpload").addEventListener("change", function () {
        readURL(this);
    });

});



const togglePasswordButton = document.getElementById('show-password');
const passwordInput = document.getElementById('password');

togglePasswordButton.addEventListener('click', () => {
    const passwordVisible = togglePasswordButton.classList.toggle('password-visible');
    const toggleIcon = togglePasswordButton.querySelector('.toggle-icon');
    const toggleIconHidden = togglePasswordButton.querySelector('.toggle-icon-hidden');
    toggleIcon.style.display = passwordVisible ? 'none' : 'inline-block';
    toggleIconHidden.style.display = passwordVisible ? 'inline-block' : 'none';
    passwordInput.type = passwordVisible ? 'text' : 'password';
});