<?php
$servidor = "localhost";
$usuario = "root";
$senha = " ";
$dbname = "";

$link = mysqli_connect($servidor, $usuario, $senha, $dbname);
mysqli_set_charset($link, 'UTF-8');
?>