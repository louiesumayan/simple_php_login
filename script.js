document.addEventListener('DOMContentLoaded', () => {
  const loginForm = document.getElementById('login-form');
  const registerForm = document.getElementById('register-form');
  const formTitle = document.getElementById('form-title');
  const toggleText = document.getElementById('toggle-text');
  const toggleLink = document.getElementById('toggle-link');

  let showingLogin = true;

  // Use a named function instead of an arrow function
  function toggleHandler(e) {
    e.preventDefault();
    showingLogin = !showingLogin;

    if (showingLogin) {
      formTitle.textContent = 'Login';
      loginForm.classList.remove('hidden');
      registerForm.classList.add('hidden');
      toggleText.innerHTML = `
       Don't have an account?
       <a href="#" id="toggle-link">Register</a>
     `;
    } else {
      formTitle.textContent = 'Register';
      loginForm.classList.add('hidden');
      registerForm.classList.remove('hidden');
      toggleText.innerHTML = `
       Already have an account?
       <a href="#" id="toggle-link">Login</a>
     `;
    }

    // re-hook the new link inside toggleText
    document
      .getElementById('toggle-link')
      .addEventListener('click', toggleHandler);
  }

  toggleLink.addEventListener('click', toggleHandler);
});
