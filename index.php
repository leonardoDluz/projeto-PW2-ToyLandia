<?php

$title = 'Home';

require_once __DIR__ . '/DB.php';

$productsQuery = DB::select('Produto');

require_once __DIR__ . '/header.php';

?>
  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <?php foreach($productsQuery as $product): ?>

        <li class="glide__slide slide product-slide">
          <div class="product">
            <img class="product-slide-img" src="<?= $product['img'] ?>" alt="" srcset="">
  
            <h2><?= $product['titulo'] ?></h2>
  
            <p><?= $product['descricao'] ?></p>
  
            <h4>R$<?= $product['preco'] ?></h4>
          </div>
        </li>

        <?php endforeach ?>  
      </ul>
    </div>
  </div>  
<div class="container-xxl">
</div>
<?php

require_once __DIR__ . '/footer.php';