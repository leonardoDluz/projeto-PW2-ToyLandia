<?php

// $_ENV = parse_ini_file('../config.ini', true);

// $connection = mysqli_connect($_ENV['HOST'], $_ENV['USER'], $_ENV['PASSWORD'], $_ENV['DB']);

$connection = mysqli_connect('localhost', 'root', 'Intel@2022', 'ToyLandia');

if (!$connection) {
  die (mysqli_connect_error());
}