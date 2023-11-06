<?php

$title = 'Listagem de Categorias';

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../DB.php';
require_once __DIR__ . '/../header.php';

$categorysQuery = DB::select('Categoria');

?>
<div id="deleteCategoryAlert"></div>
<div class="container-xxl product-container">

  <?php foreach($categorysQuery as $category): ?>
  <div  class="product">

    <h2><?= $category['nomeCategoria'] ?></h2>

    <a href="deletar.php?id=<?= $category['idCategoria'] ?>" class="btn btn-primary">Deletar</a>

  </div>
  <?php endforeach ?>  

</div>
<?php

require_once __DIR__ . '/../footer.php';