<?php

require_once __DIR__ . '/../DB.php';

$host = $_SERVER['HTTP_HOST'];

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$parameters = ['nome', 'email', 'senha', 'adm'];
$values = [$name, $email, $password, 0];

$insert = DB::insert('Usuario', $parameters, $values);

if ($insert === false) {
  header("Location: http://$host/usuario/cadastro.php?success=0");
} else {
  header("Location: http://$host/usuario/cadastro.php?success=1");
}

