<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="/node_modules/@glidejs/glide/dist/glide.min.js" defer></script>
  <script src="/public/js/glide.js" defer></script>
  <link rel="shortcut icon" href="/public/icons/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/node_modules/@glidejs/glide/dist/css/glide.core.min.css">
  <link rel="stylesheet" href="/node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
  <link rel="stylesheet" href="/public/css/style.css">
  <title>ToyLandia - <?=$title?></title>
</head>
<body>
  <header>
    <div class="container-xxl header">
      <a href="/index.php">
        <img class="icon" src="/public/icons/logo.svg" alt="logo">
      </a>
      <form class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="button-search">
        <button class="btn btn-primary" type="submit" id="button-search"><img src="/public/icons/search.svg"></button>
      </form>
      <a href="">
        <img class="icon" src="/public/icons/heart-fill.svg" alt="favoritos">
      </a>
      <a href="">
        <img class="icon" src="/public/icons/cart-fill.svg" alt="carrinho">
      </a>
      <a href="/public/pages/login.php">
        <img class="icon" src="/public/icons/person-circle.svg" alt="user">
      </a>
    </div>
  </header>