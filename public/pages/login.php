<?php

$title = 'Login';

require __DIR__ . '/header.php';

?>
<form class="container-xxl" method="post">
  <input class="form-control input" type="text" placeholder="Nome de Usuário ou Email" aria-label="Nome de Usuário ou Email">

  <input class="form-control input" type="password" placeholder="Senha" aria-label="Senha">

  <button class="btn btn-primary" type="submit">Entrar</button>
  
  <a href="/public/pages/singUp.php">Não Tem Conta? </a> 
</form>
<?php

require __DIR__ . '/footer.php';