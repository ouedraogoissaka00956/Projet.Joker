document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const passwordType = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', passwordType);
        
        // Changer l'icône
        this.classList.toggle('fa-eye-slash');
        this.classList.toggle('fa-eye');
    });
});
