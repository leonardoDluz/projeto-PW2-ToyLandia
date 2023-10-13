<?php

session_start();

$host = $_SERVER['HTTP_HOST'];


if($_SESSION['admin'] != true) {
    header("Location: http://$host");
}