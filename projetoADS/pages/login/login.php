<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

// Dados para conexão com o banco de dados
$servidor = 'localhost';
$userName = 'root';
$password = 'Root';
$dataBase = 'ingressofit';

// Conectar ao banco de dados
$connect = mysqli_connect($servidor, $userName, $password, $dataBase);

// Verificar a conexão
if (!$connect) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Comando SQL
$sql = "SELECT * FROM usuario WHERE email = '$email'";

// Executar a consulta
$result = mysqli_query($connect, $sql);

// Verificar se a consulta retornou algum resultado
if (mysqli_num_rows($result) > 0) {
    // O email existe na tabela
    while ($row = mysqli_fetch_assoc($result)) {
        // Aqui, você pode acessar os dados do usuário
        $nome = $row['nome'];
        $userEmail = $row['email'];
        $userSenha = $row['senha'];
        if($senha == $userSenha){
            echo $userEmail;
        }else {
            echo "usuário ou senha invalodo!";
        }
    }
} else {
    echo "Usuário não encontrado!";
}

// Fechar a conexão com o banco de dados
mysqli_close($connect);
?>
