const loginAlert = document.querySelector("#loginAlert");
const urlParams = new URLSearchParams(window.location.search);

const login = urlParams.get('login');

if (login == 0) {
  loginAlert.style.display = 'block';
}