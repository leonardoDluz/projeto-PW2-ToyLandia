<?php

// require './public/pages/home.php';
require './src/DB.php';
use DB;

DB::insert('Usuario', ['nome', 'email', 'senha', 'adm'], ['eu', 'eu@eu', 'senha', 0]);
var_dump('<pre>', DB::select('Usuario'));