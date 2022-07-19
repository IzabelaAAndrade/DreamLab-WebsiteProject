<?php
    include('../login/conexao.php');
    session_start();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | DREAM LAB</title>
        <link rel="icon" href="../icones/favicondream1.png">
        <!-- Inclusão de Fontes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Raleway:wght@100;400&display=swap" rel="stylesheet">
        <!-- Inclusão de Arquivos CSS -->
        <link rel="stylesheet" href="../base.css">
        <link rel="stylesheet" href="equipe/equipe.css">
        <link rel="stylesheet" href="paginas.css">
        <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
        
    </head>
    <body>
        <header>
            <img src="../imgs/logo-branca.png" alt="Logo DREAM Lab Unifesp" id="logo-superior"/>
            <nav class="menu">
                <ul>
                    <li class="link-trad"><a href="../index.html">HOME</a></li>
                    <li class="dropdown">
                        <a href="index.html" class="btn-dropdown">SOBRE</a>
                        <div class="conteudo-dropdown">
                            <a href="equipe/equipe.php">EQUIPE</a>
                            <a href="sobreLab.php">O LAB</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="index.html" class="btn-dropdown">PESQUISA</a>
                        <div class="conteudo-dropdown">
                            <a href="">BIOTÉRIO DE CÉLULAS</a>
                            <a href="">TRATAMENTOS</a>
                        </div>
                    </li>
                    <li class="link-trad"><a href="index.html">FERRAMENTAS</a></li>
                    <li class="link-trad"><a href="index.html">MENÇÕES</a></li>
                    <li class="link-trad"><a href="index.html">GALERIA</a></li>
                    <li class="link-trad"><a href="index.html">CONTATO</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="superior-media">
                <!-- Imagem média superior, adição no CSS -->
            </div>
            
            <section class="section-clara">
                <h1 class="titulos-primarios-1" id="nome">Sobre o Laboratório</h1>
                <?php
                    $queryConteudo = "SELECT texto FROM conteudos WHERE id='1' AND categoria='decricaoSobre' ";
                    $resQuery = mysqli_query($conexao, $queryConteudo);
                    $resFormatado = mysqli_fetch_assoc($resQuery);
                ?>
                <p class="paragrafos-primarios-1"><?php echo $resFormatado['texto'];?></p>
                <?php
                    if($_SESSION['user']){
                        ?><a id="linkp" href="../login/manipulacoesbd/editaSobre.php"><button class="btn-escuro">EDITAR TEXTO</button></a><?php
                    }
                ?>
                
            </section>

            <section class="section-escura">
                <h1 class="titulos-primarios-2">Menções na Mídia</h1>
                
            </section>

            <section class="section-clara">
                <h1 class="titulos-primarios-1" id="nome">Principais Publicações</h1>
                <div class="ap-pesquisadores">
                    <?php

                        function cmp($a, $b){
                            return $a['dt_publicacao'] < $b['dt_publicacao'];
                        }

                        $queryPublicacoes = "SELECT * FROM publicacoes";
                        mysqli_set_charset($conexao, "utf8");
                        $resPublicaoes = mysqli_query($conexao, $queryPublicacoes);
                        $arrayResultados = array();
                        while($linha = mysqli_fetch_assoc($resPublicaoes)){
                            array_push($arrayResultados, $linha);
                        }
                        $arrayOrdenado = usort($arrayResultados, 'cmp');
                        for($i = 0; $i < sizeof($arrayResultados); $i++) {
                            $row_publicacoes = $arrayResultados[$i];
                    ?>
                    <div class="pesquisador">
                        <div class="imgs-icones imgs-publ">
                            <img src="../login/manipulacoesbd/<?php echo $row_publicacoes['caminho_img'];?>" class="fotos-alunas ajuste-publ">
                        </div>
                        <div class="textual">
                            <h1 class="t-publicacoes"><?php echo $row_publicacoes['titulo'];?></h1>
                                <h2><?php 
                                $dtFormatada = date("M, Y", strtotime($row_publicacoes['dt_publicacao']));
                                echo strtoupper($dtFormatada);?></h2>
                                <p><?php echo $row_publicacoes['autores'];?></p>
                                <a href="<?php echo $row_publicacoes['url_publicacao']?>"><button class="btn-escuro">ACESSAR PUBLICAÇÃO</button></a>
                        </div>
                    </div>
                    <?php
                                    
                                }  
                                ?>
                </div>

                <?php
                    if($_SESSION['user']){
                        ?><a id="linkp" href="../login/manipulacoesbd/adicionaPublicacao.php"><button class="btn-escuro">ADICIONAR NOVA PUBLICAÇÃO</button></a><?php
                    }
                ?>

                
            </section>
        </main>


        <footer>
            <img src="../imgs/logo-branca.png" alt="Logo DREAM Lab Unifesp" id="logo-inferior"/>
            <div id="conteudo-footer">
                <h3>FAÇA UMA VISITA</h3>
                <p>Rua Dr. Diogo de Faria, 824 <br>
                    5 andar – Vila Clementino, São Paulo – SP, 55397-289</p>
                <div class="icones-sociais">
                    <a href="https://www.instagram.com/dreamlab.unifesp/">
                        <img src="../icones/redes-sociais/instagram-claro.png" alt="Logo Instagram" class="imgs-sociais"/>
                    </a>
                    <a href="https://www.facebook.com/DREAM-Lab-Unifesp-102678821476445/">
                        <img src="../icones/redes-sociais/facebook-claro.png" alt="Logo Facebook" class="imgs-sociais"/>
                    </a>
                    <a href="https://twitter.com/dreamlabunifesp">
                        <img src="../icones/redes-sociais/twitter-claro.png" alt="Logo Twitter" class="imgs-sociais"/>
                    </a>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
        <script type="text/javascript" src="ap-individual.js"></script>
    </body>
</html>