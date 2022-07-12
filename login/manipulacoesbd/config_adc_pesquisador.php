<?php
    session_start();
    include('../verifica_login.php');
    include_once('../conexao.php');


    //recebimento de dados
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $categoria = mysqli_real_escape_string($conexao, $_POST['categoria']);
    $lattes = mysqli_real_escape_string($conexao, $_POST['lattes']);
    $linkedin = mysqli_real_escape_string($conexao, $_POST['linkedin']);
    $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
    $publicacoes = mysqli_real_escape_string($conexao, $_POST['publicacoes']);
    $caminhoArquivo = "imgs-pesquisadores/padrao.png";

    //verificar arquivo de img
    if(isset($_FILES['img-pesquisador'])){
        $arquivoImg = $_FILES['img-pesquisador'];

        
        if($arquivoImg['error']){
            $_SESSION['falha_arquivo'] = true;
            header('Location: acrescentaPesquisadores.php');
            exit();
        }
        

        $pasta = "imgs-pesquisadores/";
        $novoNomeArquivo = uniqid(); //Para salvar no BD
        $extensaoArquivo = strtolower(pathinfo($arquivoImg['name'], PATHINFO_EXTENSION));

        if($extensaoArquivo != 'png' && $extensaoArquivo != 'jpg' && $extensaoArquivo != 'jpeg'){
            $_SESSION['falha_extensao'] = true;
            header('Location: acrescentaPesquisadores.php');
            exit();
        }
        $caminhoArquivo = $pasta . $novoNomeArquivo . "." . $extensaoArquivo;
        $salvou = move_uploaded_file($arquivoImg['tmp_name'], $caminhoArquivo);

        if(!$salvou){
            $_SESSION['erro_salvar'] = true;
            header('Location: acrescentaPesquisadores.php');
            exit();
        }
        

    }


    $queryAdc = "INSERT INTO pesquisadores(nome, categoria, descricao, lattes, linkedin, caminho_img, publicacoes) VALUES ('{$nome}','{$categoria}','{$descricao}','{$lattes}','{$linkedin}', '{$caminhoArquivo}', '{$publicacoes}')";

    $resultadoQuery = mysqli_query($conexao, $queryAdc);
    // se a inserção funcionar :)
    if($resultadoQuery){
        $_SESSION['adicao_sucesso'] = true;
        header('Location: acrescentaPesquisadores.php');
        exit();
    }


?>