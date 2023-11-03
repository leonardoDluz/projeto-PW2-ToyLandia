<?php

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../DB.php';

$category = filter_input(INPUT_POST, 'category');

$insert = DB::insert('Categoria', ['nomeCategoria'], [$category]);

if ($insert === false) {
  header("Location: http://$host/categoria/adicionar.php?success=0");
} else {
  header("Location: http://$host/categoria/adicionar.php?success=1");
}