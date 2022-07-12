<?php
session_start();
include('conexao.php');

// verificar se os campos estão ou não preenchidos

if(empty($_POST['user']) || empty($_POST['senha'])){
    header('Location: indexLogin.php');
    exit();
}

//Pegar os dados advindos do cliente
$usuario = mysqli_real_escape_string($conexao, $_POST['user']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

// Verificar existência desses dados no BD
$query = "SELECT id, username FROM administradores WHERE username = '{$usuario}' AND senha = md5('{$senha}')";
$resultadoVerificacao = mysqli_query($conexao, $query);
$correspondencias = mysqli_num_rows($resultadoVerificacao);

//Direcionar o usuário conforme senha e username digitados
if($correspondencias == 1){
    $_SESSION['user'] = $usuario;
    header('Location: painelEdicao.php');
    exit();
}else{
    $_SESSION['autenticacao_invalida'] = true;
    header('Location: indexLogin.php');
    exit();
}


?>