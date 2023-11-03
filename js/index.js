import formSubmissionAlert from "./formSubmissionAlert.js";

const alerts = [
  {
    selector: '#loginAlert',
    urlParam: 'login',
    message: {
      success: 'Login efetuado com sucesso!',
      error: 'Nome de usuário ou senha incorretos'
    }
  },
  {
    selector: '#singInAlert',
    urlParam: 'success',
    message: {
      success: 'Usuario cadastrado com sucesso!',
      error: 'Erro ao cadastrar usuario'
    }
  },
  {
    selector: '#addProductAlert',
    urlParam: 'success',
    message: {
      success: 'Produto adicionado com sucesso!',
      error: 'Erro ao adicionar produto'
    }
  },
  {
    selector: '#addCategoryAlert',
    urlParam: 'success',
    message: {
      success: 'Categoria adicionado com sucesso!',
      error: 'Erro ao adicionar categoria'
    }
  } 
];

alerts.map(async alert => {formSubmissionAlert(alert.selector, alert.urlParam, alert.message)});

// new Glide('.glide', {
//   type: 'carousel',
//   startAt: 0,
//   perView: 4.2
// }).mount();
