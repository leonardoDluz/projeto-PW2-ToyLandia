<?php

$title = 'Editar Produto';

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../header.php';
require_once __DIR__ . '/../DB.php';

$id = filter_input(INPUT_GET, 'id');

$categorys = DB::select('Categoria');
$product = DB::selectWhereId('Produto', $id);
$product = $product[0];
$isSelected;

foreach($categorys as $category) {
  $isSelected = $product['idCategoria'] === $category['idCategoria'] ? 'selected' : ' ';
}

?>

<form class="container-xxl container" action="./editado.php" method="post" enctype="multipart/form-data">

  <h1 class="mb-4"><?= $title ?></h1>

  <input type="hidden" name="id" value="<?= $product['idProduto'] ?>">

  <input class="form-control input" type="text" placeholder="Nome do Produto" aria-label="Nome do Produto" name="name" required minlength="5"
  value="<?= $product['titulo'] ?>">

  <textarea class="form-control input" type="text" placeholder="Descrição" aria-label="Descrição" name="description" rows="3" required minlength="5">
  <?= $product['descricao'] ?>
  </textarea>

  <input class="form-control input" type="number" placeholder="Estoque" aria-label="Estoque" name="stock" required minlength="5"
  value="<?= $product['estoque'] ?>">

  <input class="form-control input" type="number" placeholder="Preço" aria-label="Preço" name="price" required minlength="5"
  value="<?= $product['preco'] ?>">

  <select class="form-select mb-3" name="category">
    <?php foreach ($categorys as $category) : ?>
      <option value="<?= $category['idCategoria'] ?>" <?= $isSelected ?>><?= $category['nomeCategoria'] ?></option>
    <?php endforeach; ?>
  </select>

  <div class="mb-3">
    <label for="formImg" class="form-label">Imagem Do Produto</label>
    <input class="form-control" type="file" id="formImg" name="img" required>
  </div>

  <div role="alert" id="editProductAlert"></div>

  <button class="btn btn-primary" type="submit">Editar</button>
</form>

<?php

require_once __DIR__ . '/../footer.php';
