<?php

require_once __DIR__ . '/DB.php';

DB::update('Produto', [['idCategoria', 'titulo', 'descricao', 'estoque', 'preco', 'img'], 
[$category, $productName, $description, $stock, $price, $imgPath], $id])