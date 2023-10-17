<?php

$servidor = "localhost";
$userName = "root";
$password = "Root";
$dataBase = "ingressofit";

$email = $_POST['sessionId'];

//conexão com o banco de dados;
$connect = mysqli_connect($servidor, $userName, $password, $dataBase);
//comando para buscar os ingressos do usuário;
$ingressos = "SELECT * FROM ingresos WHERE usuario = '$email'";

//pegando do banco os ingressos;
$resultIngresso = mysqli_query($connect, $ingressos);

if (mysqli_num_rows($resultIngresso) > 0) {
    // pegando os dados de cada linha retornada da tabela ingresso;
    while ($row = mysqli_fetch_assoc($resultIngresso)) {
        // Aqui, você pode acessar os dados do usuário
        $img = $row['img'];
        $nome_show = $row['nome_show'];
        //vou enviar ao front as variavei dentro de uma strng.
        //com o intuito de usar o .split do js para quebralas um determinado ponto.
        echo "{ $img'/$nome_show }";
    };
} else {
    echo "Erro ao buscar os ingressos;";
}


?>