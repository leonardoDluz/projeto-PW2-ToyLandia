<?php

$title = 'Criar Conta';

require __DIR__ . '/header.php';

?>
<form class="container-xxl" action="../../src/insert/insert.php" method="post">
  <input class="form-control input" type="text" placeholder="Nome de Usuário" aria-label="Nome de Usuário" name="name">

  <input class="form-control input" type="text" placeholder="Email" aria-label="Email" name="email">

  <input class="form-control input" type="password" placeholder="Senha" aria-label="Senha" name="password">

  <button class="btn btn-primary" type="submit">Criar Conta</button>

  <a href="/public/pages/login.php"> Já Tem Conta?</a>
</form>
<?php

require __DIR__ . '/footer.php';