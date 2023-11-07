<?php

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../DB.php';

$host = $_SERVER['HTTP_HOST'];

$id = filter_input(INPUT_POST, 'id');
$category = filter_input(INPUT_POST, 'category');

$edit = DB::update('Categoria', ['nomeCategoria'], [$category], $id);

if ($edit === false) {
  header("Location: http://$host/categoria/editar.php?id=8&success=0");
} else {
  header("Location: http://$host/categoria/editar.php?id=8&success=1");
}