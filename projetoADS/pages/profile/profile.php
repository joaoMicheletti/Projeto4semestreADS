<?php
// objeto referente ao usuário;
class User {
    public $nomeUser;
    public $emailUser;
    public $phoneUser;
};
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
$resultIngresso = mysqli_query($connect, $ingressos);
//pegando do banco o usuário;
$resultUser =  mysqli_query($connect, $user);

if (mysqli_num_rows($resultIngresso) > 0) {
    // pegando os dados de cada linha retornada da tabela ingresso;
    while ($row = mysqli_fetch_assoc($resultIngresso)) {
        // Aqui, você pode acessar os dados do usuário
        $img = $row['img'];
        $nome_show = $row['nome_show'];
        //vou enviar ao front as variavei dentro de uma strng.
        //com o intuito de usar o .split do js para quebralas um determinado ponto.
        echo "$img'/$nome_show";
    };
    if (mysqli_num_rows($resultUser) > 0){
         //pegando dados de cada linha retornada da tabela usuário;
        while($rows = mysqli_fetch_assoc($resultUser)){
            $nome = $rows['nome'];
            $telefone = $rows['telefone'];
            $userEmail = $rows['email'];
            //vou enviar ao front as variavei dentro de uma strng.
        //com o intuito de usar o .split do js para quebralas um determinado ponto.
        
            
            //print $nome;
        };
    };
} else {
    echo "Usuário não encontrado!";
}

//pegando dados do usuario;
//mysqli_query($connect, $user);

?>
