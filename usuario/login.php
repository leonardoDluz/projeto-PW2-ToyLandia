<?php

$title = 'Login';

require_once __DIR__ . '/../header.php';

?>
<form class="container-xxl" action="/usuario/logado.php" method="post">
  <input class="form-control input" type="text" placeholder="Nome de Usuário ou Email" aria-label="Nome de Usuário ou Email" name="username">

  <input class="form-control input" type="password" placeholder="Senha" aria-label="Senha" name="password">

  <div class="alert alert-warning" role="alert" id="loginAlert">Nome de Usuário ou Senha Incorretos</div>
  
  <button class="btn btn-primary" type="submit">Entrar</button>
  
  <a href="/usuario/cadastro.php">Não Tem Conta? </a> 

</form>
<?php

require_once __DIR__ . '/../footer.php';