<?php

$title = 'Adicionar Produto';

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../header.php';
require_once __DIR__ . '/../DB.php';

$categorys = DB::select('Categoria');

?>

<form class="container-xxl container" action="./adicionado.php" method="post" enctype="multipart/form-data">

  <h1 class="mb-4"><?=$title?></h1>

  <input class="form-control input" type="text" placeholder="Nome do Produto" aria-label="Nome do Produto" name="name" required>

  <input class="form-control input" type="text" placeholder="Descrição" aria-label="Descrição" name="description" required>

  <input class="form-control input" type="number" placeholder="Estoque" aria-label="Estoque" name="stock" required>

  <input class="form-control input" type="number" placeholder="Preço" aria-label="Preço" name="price" required>

  <select class="form-select mb-3" name="category">
    <option selected>Selecione a Categoria</option>
    <?php foreach ($categorys as $category): ?>
    <option value="<?=$category['idCategoria']?>"><?=$category['nomeCategoria']?></option>
    <?php endforeach; ?>
  </select>

  <div class="mb-3">
    <label for="formImg" class="form-label">Imagem Do Produto</label>
    <input class="form-control" type="file" id="formImg" name="img">
  </div>
    
  <button class="btn btn-primary" type="submit">Criar</button>
</form>

<?php

require_once __DIR__ . '/../footer.php';