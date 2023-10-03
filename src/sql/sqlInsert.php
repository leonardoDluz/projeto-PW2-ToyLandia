<?php

function sqlInsert($data, $coluns) {
  require '../connection.php';

  $valuesString = '';
  $colunsString = '';

  for ($i = 0; $i < count($data); $i++) {
    if ($i < count($data) - 1) {
      $valuesString .= "'$data[$i]',";
    } else {
      $valuesString .= "'$data[$i]'";
    }
  }

  for ($i = 0; $i < count($data); $i++) {
    if ($i < count($data) - 1) {
      $colunsString .= "$coluns[$i],";
    } else {
      $colunsString .= $coluns[$i];
    }
  }

  
  $command = "INSERT INTO Usuario ($colunsString) VALUES ($valuesString)";
  var_dump('<pre>',$colunsString, $valuesString, $command);

  $query = mysqli_query($connection, $command);

  if($query == false) {
    die(mysqli_error($connection));
  }
}

