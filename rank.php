<?php
require 'connection.php';
$query = 'select * 'users'';
$results = mysqli_query($link, $query);

if(! mysqli_num_rows($results))
{
    echo 'Nenhum usuário encontrado...';
}
else
{
    while($user = mysqli_fetch_object($results));
    echo $user -> name, "\n";
}
?>