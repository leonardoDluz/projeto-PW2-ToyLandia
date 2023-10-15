<?php

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../DB.php';

$productName = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');
$stock = filter_input(INPUT_POST, 'stock');
$category = filter_input(INPUT_POST, 'category');
$price = filter_input(INPUT_POST, 'price');

$img = $_FILES['img'];
$imgName = $img['name'];
$imgTempName = $img['tmp_name'];
$imgPath = '../uploads/';
move_uploaded_file($imgTempName, $imgPath . $imgName);
$imgPath = "uploads/$imgName";

DB::insert(
  'Produto', 
  ['idCategoria', 'titulo', 'descricao', 'estoque', 'preco', 'img'], 
  [$category, $productName, $description, $stock, $price, $imgPath]
);

$title = 'Produto Adicionado';
$message = 'Produto Adicinado com Sucesso!'; 

require_once __DIR__ . '/../message.php';
