<?php

$title = 'Listagem de Produtos';

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../DB.php';
require_once __DIR__ . '/../header.php';

$productsQuery = DB::select('Produto');

?>
<div id="deleteProductAlert"></div>
<div class="container-xxl product-container">

  <?php foreach($productsQuery as $product): ?>
  <div  class="product">

    <img class="product-slide-img" src="../<?= $product['img'] ?>" alt="" srcset="">

    <h2><?= $product['titulo'] ?></h2>

    <p><?= $product['descricao'] ?></p>

    <h4>R$<?= $product['preco'] ?></h4>

    <a href="produto.php?id=<?= $product['idProduto'] ?>" class="btn btn-primary">Ver</a>

    <a href="editar.php?id=<?= $product['idProduto'] ?>" class="btn btn-primary">Editar</a>

    <a href="deletar.php?id=<?= $product['idProduto'] ?>" class="btn btn-primary">Deletar</a>

  </div>
  <?php endforeach ?>  

</div>
<?php

require_once __DIR__ . '/../footer.php';