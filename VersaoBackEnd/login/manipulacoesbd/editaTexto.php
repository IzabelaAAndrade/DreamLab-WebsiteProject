<?php
    session_start();
    include('../verifica_login.php');
    include_once('../conexao.php');


    //recebimento de dados
    $texto = mysqli_real_escape_string($conexao, $_POST['texto']);

    $queryEdicao = "UPDATE conteudos SET texto='{$texto}'WHERE id='1' AND CATEGORIA='decricaoSobre'";
    $resultadoQuery = mysqli_query($conexao, $queryEdicao);
    var_dump($resultadoQuery);

    
    if($resultadoQuery){
        $_SESSION['edicao_sucesso'] = true;
        header('Location: ../../paginas/sobreLab.php');
        exit();
    }
    

?>