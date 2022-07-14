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
    $id = $_POST['dado_id'];

    $query_caminho = "SELECT caminho_img FROM pesquisadores WHERE id='{$id}'";
    $resQuery = mysqli_query($conexao, $query_caminho);
    
    $cam_parc = mysqli_fetch_assoc($resQuery);
    $caminhoArquivo = $cam_parc['caminho_img'];

    //verificar arquivo de img
    if(isset($_POST['img-pesquisador'])){
        $arquivoImg = $_FILES['img-pesquisador'];
        
        if($arquivoImg['error']){
            $_SESSION['falha_arquivo'] = true;
            header('Location: ../../paginas/equipe/editaPesquisador.php?pesquisadora='.$id);
            exit();
        }
        

        $pasta = "imgs-pesquisadores/";
        $novoNomeArquivo = uniqid(); //Para salvar no BD
        $extensaoArquivo = strtolower(pathinfo($arquivoImg['name'], PATHINFO_EXTENSION));

        if($extensaoArquivo != 'png' && $extensaoArquivo != 'jpg' && $extensaoArquivo != 'jpeg'){
            $_SESSION['falha_extensao'] = true;
            header('Location: ../../paginas/equipe/editaPesquisador.php?pesquisadora='.$id);
            exit();
        }
        $caminhoArquivo = $pasta . $novoNomeArquivo . "." . $extensaoArquivo;
        $salvou = move_uploaded_file($arquivoImg['tmp_name'], $caminhoArquivo);

        if(!$salvou){
            $_SESSION['erro_salvar'] = true;
            header('Location: ../../paginas/equipe/editaPesquisador.php?pesquisadora='.$id);
            exit();
        }
        

    }


    $queryAdc = "UPDATE pesquisadores SET nome='{$nome}', categoria='{$categoria}', descricao='{$descricao}', lattes='{$lattes}', linkedin='{$linkedin}', caminho_img='{$caminhoArquivo}', publicacoes= '{$publicacoes}' WHERE id='{$id}'";
    $resultadoQuery = mysqli_query($conexao, $queryAdc);
    var_dump($resultadoQuery);

    if($resultadoQuery){
        $_SESSION['edicao_sucesso'] = true;
        header('Location: ../../paginas/equipe/editaPesquisador.php?pesquisadora='.$id);
        exit();
    }
    

?>