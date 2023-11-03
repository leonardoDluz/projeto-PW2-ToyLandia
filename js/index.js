import formSubmissionAlert from "./formSubmissionAlert.js";

const loginAuth = formSubmissionAlert('#loginAlert', 'login', {
  success: 'Login efetuado com sucesso!',
  error: 'Nome de usuário ou senha incorretos'
});

// new Glide('.glide', {
//   type: 'carousel',
//   startAt: 0,
//   perView: 4.2
// }).mount();
