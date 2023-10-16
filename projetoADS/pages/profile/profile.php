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
//comando para buscar os ingressos do usuário;
$ingressos = "SELECT * FROM ingresos WHERE usuario = '$email'";

//pegando do banco os ingressos;
$result = mysqli_query($connect, $ingressos);

if (mysqli_num_rows($result) > 0) {
    // O email existe na tabela
    while ($row = mysqli_fetch_assoc($result)) {
        // Aqui, você pode acessar os dados do usuário
        $usuario = $row['usuario'];
        $img = $row['img'];
        $nome_show = $row['nome_show'];
        $valor_total = ['valor_total'];
        echo $usuario, $img;
    }
} else {
    echo "Usuário não encontrado!";
}

//pegando dados do usuario;
//mysqli_query($connect, $user);

?>
