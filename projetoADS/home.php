<?php
// variáveis  referente ao banco de dados;
//$servidor = 'localhost';
//$userName = 'root';
//$password = 'Root';
//$database = 'nome do banco';
// conexão com o banco de dados;
//$connect = mysqli_connect($servidor, $userName, $password, $database);

$img = $_POST['img'];
$show = $_POST['show'];
$horaData = $_POST['horaData'];
$local = $_POST['local'];
$preco = $_POST['preco'];

echo $img,$show,$horaData,$local,$preco;
?>