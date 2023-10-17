<?php

$servidor = "localhost";
$userName = "root";
$password = "Root";
$dataBase = "ingressofit";

$email = $_POST['sessionId'];

//conexão com o banco de dados;
$connect = mysqli_connect($servidor, $userName, $password, $dataBase);
//comando para buscar informações do usuário;
$user = "SELECT * FROM usuario WHERE email = '$email'";

//pegando do banco o usuário;
$resultUser =  mysqli_query($connect, $user);

if (mysqli_num_rows($resultUser) > 0) {
    //pegando dados de cada linha retornada da tabela usuário;
    while($rows = mysqli_fetch_assoc($resultUser)){
        $nome = $rows['nome'];
        $telefone = $rows['telefone'];
        $userEmail = $rows['email'];
        //resposta sendo enviado no formato de string para usarmos o metodo .split do js;
        echo "$nome / $telefone / $userEmail";
    };
} else {
    print "Erro ao buscar informações do usuário";
};
?>