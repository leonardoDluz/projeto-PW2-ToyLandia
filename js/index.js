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
  },
  {
    selector: '#editProductAlert',
    urlParam: 'success',
    message: {
      success: 'Produto editado com sucesso!',
      error: 'Erro ao editar produto'
    }
  }, 
  {
    selector: '#deleteProductAlert',
    urlParam: 'delete',
    message: {
      success: 'Produto deletado com sucesso!',
      error: 'Erro ao deletar produto'
    }
  }, 
  {
    selector: '#editProductAlert',
    urlParam: 'success',
    message: {
      success: 'Produto deletado com sucesso!',
      error: 'Erro ao deletar produto'
    }
  },
];

alerts.map(async ({selector, urlParam, message}) => {formSubmissionAlert(selector, urlParam, message)});

// new Glide('.glide', {
//   type: 'carousel',
//   startAt: 0,
//   perView: 4.2
// }).mount();
