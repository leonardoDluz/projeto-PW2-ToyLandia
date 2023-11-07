<?php

$id = filter_input(INPUT_GET, 'id');

require_once __DIR__ . '/../DB.php';

$productsQuery = DB::select('Produto');
$product = [];

foreach ($productsQuery as $productQuery) {
  if ($productQuery['idProduto'] == $id) {
    $product = $productQuery;
  }
}

$title = 'Produto';

require_once __DIR__ . '/../header.php';

?>

<div class="container-xxl product-container">
    <img class="product-img" src="../<?= $product['img'] ?>" alt="imagem do produto">
    
    <div class="container product-info-container">
      <h2><?= $product['titulo'] ?></h2>
      
      <p><?= $product['descricao'] ?></p>
      
      <h4>R$<?= $product['preco'] ?></h4>

      <h6>Estoque: <?= $product['estoque'] ?></h6>
      
      <button class="btn btn-primary" type="button">Adicionar ao Carrinho</button>
      <button class="btn btn-primary" type="button">Comprar</button>
    </div>
</div>

<?php

require_once __DIR__ . '/../footer.php';