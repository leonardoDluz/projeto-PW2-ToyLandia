<?php

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../DB.php';

$category = filter_input(INPUT_POST, 'category');

DB::insert('Categoria', ['nomeCategoria'], [$category]);

$title = 'Categoria Adicionada';
$message = 'Categoria Adicinada com Sucesso!'; 

require_once __DIR__ . '/../message.php';