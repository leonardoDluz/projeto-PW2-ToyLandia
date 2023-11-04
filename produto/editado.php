<?php

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../DB.php';

$host = $_SERVER['HTTP_HOST'];

$id = filter_input(INPUT_POST, 'id');
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

$edit = DB::update('Produto', ['idCategoria', 'titulo', 'descricao', 'estoque', 'preco', 'img'], 
[$category, $productName, $description, $stock, $price, $imgPath], $id);

if ($edit === false) {
  header("Location: http://$host/produto/editar.php?id=8&success=0");
} else {
  header("Location: http://$host/produto/editar.php?id=8&success=1");
}