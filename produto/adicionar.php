<?php

$title = 'Adicionar Produto';

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../header.php';
require_once __DIR__ . '/../DB.php';

$categorys = DB::select('Categoria');

?>

<form class="container-xxl" action="/produto/adicionado.php" method="post">

  <h1 class="mb-4"><?=$title?></h1>

  <input class="form-control input" type="text" placeholder="Nome do Produto" aria-label="Nome do Produto" name="name">

  <input class="form-control input" type="text" placeholder="Descrição" aria-label="Descrição" name="description">

  <input class="form-control input" type="number" placeholder="Estoque" aria-label="Estoque" name="stock">


  <select class="form-select mb-3" name="category">
    <?php foreach ($categorys as $category): ?>
    <option value="<?=$category['idCategoria']?>"><?=$category['nomeCategoria']?></option>
    <?php endforeach; ?>
  </select>
    
  <button class="btn btn-primary" type="submit">Criar</button>
</form>

<?php

require_once __DIR__ . '/../footer.php';