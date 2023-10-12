<?php
$nome = $_POST['nome'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

if($pass == $cpass){
    echo 'ok';
} else {
    echo 'as Senhas não são semelhantes';
};
?>
