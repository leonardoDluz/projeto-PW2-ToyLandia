<?php

session_start();

require_once __DIR__ . '/../DB.php';

$host = $_SERVER['HTTP_HOST'];

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$login = false;

$admin = DB::select('vw_user_adm');
$users = DB::select('Usuario');

foreach ($users as $user) {
  if (
    ($user['nome'] === $username || $user['email'] === $username) && 
    $user['senha'] === $password
    ) {
    $login = true;

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    $_SESSION['admin'] = $username == $admin[0]['nome'] && $password == $admin[0]['senha'] ? true : false;
  }
}


if ($login === false) {
  header("Location: http://$host/usuario/login.php?login=0");
} else {
  header("Location: http://$host/usuario/login.php?login=1");
}