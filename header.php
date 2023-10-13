<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="/node_modules/@glidejs/glide/dist/glide.min.js" defer></script>
  <script src="/js/glide.js" defer></script>
  <script src="/js/index.js" defer></script>
  <link rel="shortcut icon" href="/icons/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/node_modules/@glidejs/glide/dist/css/glide.core.min.css">
  <link rel="stylesheet" href="/node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>ToyLandia - <?=$title?></title>
</head>
<body>
  <header>
    <div class="container-xxl header">
      <a href="/index.php">
        <img class="icon" src="/icons/logo.svg" alt="logo">
      </a>
      <form class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="button-search">
        <button class="btn btn-primary" type="submit" id="button-search"><img src="/icons/search.svg"></button>
      </form>
      <?php  ?>
      <a href="/admin.php">
        <img class="icon" src="/icons/plus-circle.svg" alt="adicionar produto">
      </a>
      <?php  ?>
      <a href="">
        <img class="icon" src="/icons/cart-fill.svg" alt="carrinho">
      </a>
      <a href="/usuario/login.php">
        <img class="icon" src="/icons/person-circle.svg" alt="user">
      </a>
    </div>
  </header>