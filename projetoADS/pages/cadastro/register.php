<?php
//dados recebidos do frontend;
$nome = $_POST['nome'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];


//dados para conexão com banco de dados;
$servido = 'localhost';
$userName = 'root';
$password = 'Root';
$dataBase = 'ingressofit';
// create connection whith database;
$connect = mysqli_connect($servido,$userName,$password,$dataBase);
//comando de verificação;
$verificar = "SELECT * FROM `usuario` WHERE email = '$email'";
//commando sql;
$sql = "insert into usuario(nome, telefone, email, senha) values('$nome','$phone', '$email', '$pass')";
//mensagen de sucesso.
$msg = "Dados  cadastrado com sucesso.";

// iniciando a conexão.
mysqli_query($connect, $verificar);

//verificar ocorrencia;
if(mysqli_affected_rows($connect)==0){
    mysqli_query($connect, $sql);
    if(mysqli_affected_rows($connect)>0){
    echo $msg;
    } else {
        print "Operação não Realizada";
    }
} else {
    echo "operação não permitida, Usuário já cadastrado!";
}
?>