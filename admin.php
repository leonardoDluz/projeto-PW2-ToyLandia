<?php

$title = 'Admin';

require_once __DIR__ . '/is-admin.php';
require_once __DIR__ . '/header.php';

?>
<div class="container-xxl admin-container">
  <div class="container secondary-container">
    <h3>Categorias</h3>
    <a class="btn btn-primary" href="/categoria/listar.php">Ver</a>
    <a class="btn btn-primary" href="/categoria/adicionar.php">Adicionar</a>
  </div>

  <div class="container secondary-container">
    <h3>Produtos</h3>
    <a class="btn btn-primary" href="/produto/listar.php">Ver</a>
    <a class="btn btn-primary" href="/produto/adicionar.php">Adicionar</a>
  </div>

  <div class="container secondary-container">
    <h3>Pedidos</h3>
    <a class="btn btn-primary" href="/pedidos/">Ver</a>
  </div>

</div>
<?php

require_once __DIR__ . '/footer.php';