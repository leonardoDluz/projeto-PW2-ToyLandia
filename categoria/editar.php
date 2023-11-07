<?php

$title = 'Editar Categoria';

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../header.php';

$id = filter_input(INPUT_GET, 'id');

?>

<form class="container-xxl" action="editado.php" method="post">
  <input type="hidden" name="id" value="<?=$id?>">

  <input class="form-control input" type="text" placeholder="Nome da Categoria" aria-label="Nome da Categoria" name="category" id="#editProductAlert" minlength="3">

  <div role="alert" id="addCategoryAlert"></div>

  <button class="btn btn-primary" type="submit">Editar</button>
</form>

<?php

require_once __DIR__ . '/../footer.php';