<?php

require_once __DIR__ . '/../is-admin.php';
require_once __DIR__ . '/../DB.php';

$host = $_SERVER['HTTP_HOST'];

$id = filter_input(INPUT_GET, 'id');

$delete = DB::delete('Produto', $id);

if ($edit === false) {
  header("Location: http://$host/produto/listar.php?id=8&delete=0");
} else {
  header("Location: http://$host/produto/listar.php?id=8&delete=1");
}