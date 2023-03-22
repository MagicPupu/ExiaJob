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