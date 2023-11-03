<?php

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../DB.php';

$host = $_SERVER['HTTP_HOST'];

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

$insert = DB::insert(
  'Produto', 
  ['idCategoria', 'titulo', 'descricao', 'estoque', 'preco', 'img'], 
  [$category, $productName, $description, $stock, $price, $imgPath]
);

if ($insert === false) {
  header("Location: http://$host/produto/adicionar.php?success=0");
} else {
  header("Location: http://$host/produto/adicionar.php?success=1");
}
