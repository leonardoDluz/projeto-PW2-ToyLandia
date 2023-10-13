<?php

require_once __DIR__ . '/../DB.php';

$productName = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');
$stock = filter_input(INPUT_POST, 'stock');
$category = filter_input(INPUT_POST, 'category');

DB::insert(
  'Produto', 
  ['idCategoria', 'titulo', 'descricao', 'estoque'], 
  [$category, $productName, $description, $stock]
);

$title = 'Produto Adicionado';
$message = 'Produto Adicinado com Sucesso!'; 

require_once __DIR__ . '/../message.php';
