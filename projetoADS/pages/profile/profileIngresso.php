<?php
$servidor = "localhost";
$userName = "root";
$password = "Root";
$dataBase = "ingressofit";

$email = $_POST['sessionId'];

// Conexão com o banco de dados;
$connect = mysqli_connect($servidor, $userName, $password, $dataBase);
// Comando para buscar os ingressos do usuário;
$ingressos = "SELECT * FROM ingresos WHERE usuario = '$email'";

// Pegando os ingressos do banco;
$resultIngresso = mysqli_query($connect, $ingressos);

// Array para armazenar os ingressos
$ingressosArray = array();

if (mysqli_num_rows($resultIngresso) > 0) {
    // Pegando os dados de cada linha retornada da tabela ingresso;
    while ($row = mysqli_fetch_assoc($resultIngresso)) {
        // Aqui, você pode acessar os dados do ingresso
        $img = $row['img'];
        $nome_show = $row['nome_show'];
        
        // Adicione os dados do ingresso ao array
        $ingressosArray[] = array("img" => $img, "nome_show" => $nome_show);
    }
    
    // Enviar a resposta JSON com os ingressos
    echo json_encode($ingressosArray);
} else {
    echo json_encode(array("error" => "Erro ao buscar os ingressos"));
}
?>