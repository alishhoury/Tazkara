const loginBtn = document.querySelector('header nav button');
const popup = document.getElementById('authPopup');
const closeBtn = document.getElementById('closeBtn');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');
const showLogin = document.getElementById('showLogin');
const showRegister = document.getElementById('showRegister');

loginBtn.addEventListener('click', () => {
  popup.classList.remove('hidden');
  loginForm.classList.add('active');
  registerForm.classList.remove('active');
});

closeBtn.addEventListener('click', () => {
  popup.classList.add('hidden');
});

showRegister.addEventListener('click', () => {
  loginForm.classList.remove('active');
  registerForm.classList.add('active');
});

showLogin.addEventListener('click', () => {
  registerForm.classList.remove('active');
  loginForm.classList.add('active');
});

loginForm.addEventListener('submit', async (e) =>{
  e.preventDefault();

  const formData = new FormData(loginForm);
  const email = formData.get('email');
  const password = formData.get('password');

  try {
    const response = await axios.post('server/auth.php', {
      action: 'login',
      email: email,
      password: password
    });
    if (response.data.status === 200){
      alert('login successful');
      popup.classList.add('hidden');

    }else {
      alert('login failed');
    } }
      catch(error){
      console.error(error);
      alert('login failed');
    }
})
