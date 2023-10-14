<?php
// variáveis  referente ao banco de dados;
$servidor = 'localhost';
$userName = 'root';
$password = 'Root';
$database = 'ingressofit';

$ususario = $_POST['sessionId'];
$img = $_POST['img'];
$nome_show = $_POST['show'];
$horaData = $_POST['horaData'];
$local = $_POST['local']; // não sera armazenado no database;
$valor_total = $_POST['preco'];

// conexão com o banco de dados;
$connect = mysqli_connect($servidor, $userName, $password, $database);

// comando sql;
$sql = "insert into ingresos(usuario, img, nome_show, valor_total) values('$usuario', '$img', '$nome_show', '$valor_total')";

$msg =  'Ingresso comprado com sucesso!';
mysqli_query($connect, $sql);
mysqli_connect($connect, $sql);
if(mysqli_affected_rows($connect) > 0 ){
    echo $msg;
} else {
    echo "Não foi possível executar a operação!";
};
?>
