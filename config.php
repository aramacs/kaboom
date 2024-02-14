<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'kaboomdb');

$conexao = new mysqli(HOST, USER, PASS, BASE);

if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
