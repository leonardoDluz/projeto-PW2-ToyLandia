<?php

$title = 'Criar Conta';

require __DIR__ . '/header.php';

?>
<form class="container-xxl" method="post">
  <input class="form-control input" type="text" placeholder="Nome de Usuário" aria-label="Nome de Usuário">

  <input class="form-control input" type="text" placeholder="Email" aria-label="Email">

  <input class="form-control input" type="password" placeholder="Senha" aria-label="Senha">

  <button class="btn btn-primary" type="submit">Criar Conta</button>
</form>
<?php

require __DIR__ . '/footer.php';