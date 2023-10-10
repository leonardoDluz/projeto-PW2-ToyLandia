<?php

session_start();

require_once __DIR__ . '/DB.php';

$admin = DB::select('vw_user_adm');
$isAdmin;

if ($_SESSION['username'] == $admin[0]['nome'] && $_SESSION['password'] == $admin[0]['senha']) {
  $isAdmin = true;
}