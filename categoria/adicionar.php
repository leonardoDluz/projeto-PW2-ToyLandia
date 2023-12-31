<?php

$title = 'Adicionar Categoria';

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../header.php';

?>

<form class="container-xxl" action="/categoria/adicionado.php" method="post">
  <input class="form-control input" type="text" placeholder="Nome da Categoria" aria-label="Nome da Categoria" name="category" minlength="3">

  <div role="alert" id="addCategoryAlert"></div>

  <button class="btn btn-primary" type="submit">criar</button>
</form>

<?php

require_once __DIR__ . '/../footer.php';