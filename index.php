<?php

$title = 'Home';

require_once __DIR__ . '/DB.php';

$productsQuery = DB::select('Produto');

require_once __DIR__ . '/header.php';

?>

<div class="container-xxl products-container">

  <?php foreach($productsQuery as $product): ?>
  <a href="./produto/produto.php?id=<?= $product['idProduto'] ?>" class="product">

    <img class="product-slide-img" src="<?= $product['img'] ?>" alt="" srcset="">

    <h2><?= $product['titulo'] ?></h2>

    <p><?= $product['descricao'] ?></p>

    <h4>R$<?= $product['preco'] ?></h4>

  </a>
  <?php endforeach ?>  

</div>
<?php

require_once __DIR__ . '/footer.php';