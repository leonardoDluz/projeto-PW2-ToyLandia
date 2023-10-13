<?php

require_once __DIR__ . '/../DB.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$parameters = ['nome', 'email', 'senha', 'adm'];
$values = [$name, $email, $password, 0];

DB::insert('Usuario', $parameters, $values);

$message = 'Usuario Cadastrado com Sucesso!';
$title = 'Usuario Cadastrado';

require_once __DIR__ . '/../message.php';

