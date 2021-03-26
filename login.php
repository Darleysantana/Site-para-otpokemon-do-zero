<?php

require 'connection.php';
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$nome = mysqli_real_escape_string($link, $post['nome']);
$email = mysqli_real_escape_string($link, $post['email']);
$telefone = mysqli_real_escape_string($link, $post['telefone']);
$sexo = mysqli_real_escape_string($link, $post['sexo']);
$login = mysqli_real_escape_string($link, $post['login']);
$senha = mysqli_real_escape_string($link, $post['senha']);
$query = 'insert into 'users'('name','email','telefone','data','login','senha') values ("$nome","$email","$telefone","$data","$login","$senha")';
mysqli_query($link, $query);

function($cadastro){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
}
    if ($senha === $nome || $data){
        return $cadastro;
    }
?>