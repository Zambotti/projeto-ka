<?php
error_reporting(E_ALL);

if(empty($_SERVER['DOCUMENT_ROOT'])){
    $path= '/var/www/';
}else {
    $path = $_SERVER['DOCUMENT_ROOT'];
}


include $path."/aula_2/config.php";
include $path."../MySqlCrud.php";
var_dump($config_banco);

# instaciando objetos
$con= new mysqli($config_banco['desenvolvimento']['serve'],$config_banco['desenvolvimento']['username'],$config_banco['desenvolvimento']['password'],$config_banco['desenvolvimento']['database']); 
var_dump($con);
?>

