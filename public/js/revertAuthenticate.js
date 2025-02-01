document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('authForm');
    const formTitle = document.getElementById('formTitle');
    const registerFields = document.getElementById('registerFields');
    const confirmPasswordField = document.getElementById('confirmPasswordField');
    const switchText = document.getElementById('switchText');
    const switchLink = document.getElementById('switchLink');
    const submitButton = form.querySelector('button[type="submit"]');
    const pseudoInput = document.getElementById('pseudo');
    const confirmPasswordInput = document.getElementById('confirmPassword');

    let isLogin = true;

    switchLink.addEventListener('click', function(e) {
        e.preventDefault();
        isLogin = !isLogin;
        if (isLogin) {
            formTitle.textContent = 'Connexion';
            registerFields.style.display = 'none';
            confirmPasswordField.style.display = 'none';
            switchText.textContent = 'Pas encore de compte ?';
            switchLink.textContent = 'S\'inscrire';
            submitButton.textContent = 'Se connecter';
            form.action = '/login';
            pseudoInput.removeAttribute('required');
            confirmPasswordInput.removeAttribute('required');
        } else {
            formTitle.textContent = 'Inscription';
            registerFields.style.display = 'block';
            confirmPasswordField.style.display = 'block';
            switchText.textContent = 'Déjà un compte ?';
            switchLink.textContent = 'Se connecter';
            submitButton.textContent = 'S\'inscrire';
            form.action = '/register';
            pseudoInput.setAttribute('required', '');
            confirmPasswordInput.setAttribute('required', '');
        }
    });

    form.addEventListener('submit', function(e) {
        if (!isLogin) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Les mots de passe ne correspondent pas');
            }
        }
    });
});