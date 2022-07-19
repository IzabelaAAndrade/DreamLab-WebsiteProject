<?php
    session_start();
    include('../verifica_login.php');
    include_once('../conexao.php');


    //recebimento de dados
    $titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
    $autores = mysqli_real_escape_string($conexao, $_POST['autores']);
    $revista = mysqli_real_escape_string($conexao, $_POST['revista']);
    $urlPublicacao = mysqli_real_escape_string($conexao, $_POST['urlArtigo']);
    $dtPublicacao = $_POST['dtPublicacao'];
   
    $caminhoArquivo = "imgs-publicacoes/padrao-publi.jpg";

    //verificar arquivo de img
    if(isset($_FILES['img-publicacao']) || isset($_POST['img-publicacao'])){
        $arquivoImg = $_FILES['img-publicacao'];

        
        if($arquivoImg['error']){
            $_SESSION['falha_arquivo'] = true;
            header('Location: adicionaPublicacao.php');
            exit();
        }
        

        $pasta = "imgs-publicacoes/";
        $novoNomeArquivo = uniqid(); //Para salvar no BD
        $extensaoArquivo = strtolower(pathinfo($arquivoImg['name'], PATHINFO_EXTENSION));

        if($extensaoArquivo != 'png' && $extensaoArquivo != 'jpg' && $extensaoArquivo != 'jpeg'){
            $_SESSION['falha_extensao'] = true;
            header('Location: adicionaPublicacao.php');
            exit();
        }
        $caminhoArquivo = $pasta . $novoNomeArquivo . "." . $extensaoArquivo;
        $salvou = move_uploaded_file($arquivoImg['tmp_name'], $caminhoArquivo);

        if(!$salvou){
            $_SESSION['erro_salvar'] = true;
            header('Location: adicionaPublicacao.php');
            exit();
        }
        

    }


    $queryAdc = "INSERT INTO publicacoes(titulo, autores, revista, dt_publicacao, url_publicacao, caminho_img) VALUES ('{$titulo}','{$autores}', '{$revista}' ,'{$dtPublicacao}','{$urlPublicacao}','{$caminhoArquivo}')";

    $resultadoQuery = mysqli_query($conexao, $queryAdc);
    // se a inserção funcionar :)
    if($resultadoQuery){
        $_SESSION['adicao_sucesso'] = true;
        header('Location: adicionaPublicacao.php');
        exit();
    }


?>