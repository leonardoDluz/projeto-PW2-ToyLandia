<?php

session_start();

require_once __DIR__ . '/../DB.php';

$host = $_SERVER['HTTP_HOST'];

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$login = false;

$users = DB::select('Usuario');

foreach ($users as $user) {
  if (
    $user['nome'] == $username && $user['senha'] == $password || 
    $user['email'] == $username && $user['senha'] == $password
    ) {
    $title = 'Logado';
    $message = 'Login Efetuado Com Sucesso!';
    $login = true;

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    require_once __DIR__ . '/../public/pages/message.php';
  }
}

if ($login === false) {
  header("Location: http://$host/usuario/login.php?login=0");
}