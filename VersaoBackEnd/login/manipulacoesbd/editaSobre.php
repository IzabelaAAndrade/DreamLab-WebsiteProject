<?php
    session_start();
    include('../verifica_login.php');
    include('../conexao.php');
?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | DREAM LAB</title>
        <link rel="icon" href="../../icones/favicondream1.png">
        <!-- Inclusão de Fontes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Raleway:wght@100;400&display=swap" rel="stylesheet">
        <!-- Inclusão de Arquivos CSS -->
        <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="../login.css">
        <link rel="stylesheet" href="../../base.css">
        <link rel="stylesheet" href="../../paginas/equipe/equipe.css">
        
    </head>
    <body>
        <header>
            <img src="../../imgs/logo-branca.png" alt="Logo DREAM Lab Unifesp" id="logo-superior"/>
            <nav class="menu">
                <ul>
                    <li class="link-trad"><a href="index.html">HOME</a></li>
                    <li class="dropdown">
                        <a href="index.html" class="btn-dropdown">SOBRE</a>
                        <div class="conteudo-dropdown">
                            <a href="../../paginas/equipe.html">EQUIPE</a>
                            <a href="../../paginas/sobreLab.php">O LAB</a>
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
           <section id="infos-login">
                <h2 class="campos-log">Olá, <?php echo $_SESSION['user']?></h2>
                <h2 class="campos-log"><a href="logout.php">Logout</a></h1>
           </section>
           <section class="section-clara">
            <?php
                $queryConteudo = "SELECT texto FROM conteudos WHERE id='1' AND categoria='decricaoSobre' ";
                $resultadoQuery = mysqli_query($conexao, $queryConteudo);
                $dados = mysqli_fetch_assoc($resultadoQuery);
            ?>
                <h1 class="titulos-primarios-1">Editar Texto Sobre</h1>
                <form method="POST" action="editaTexto.php" class="form-central">
                    <label for="texto">Conteúdo do Texto:</label>
                    <textarea rows="10" cols="30" maxlength="2000" name="texto" id="texto" required><?php echo $dados['texto'];?></textarea>
                    <input type="submit" class="btn-escuro">
                </form>

            </section>
        </main>


        <footer>
            <img src="../../imgs/logo-branca.png" alt="Logo DREAM Lab Unifesp" id="logo-inferior"/>
            <div id="conteudo-footer">
                <h3>FAÇA UMA VISITA</h3>
                <p>Rua Dr. Diogo de Faria, 824 <br>
                    5 andar – Vila Clementino, São Paulo – SP, 55397-289</p>
                <div class="icones-sociais">
                    <a href="https://www.instagram.com/dreamlab.unifesp/">
                        <img src="../../icones/redes-sociais/instagram-claro.png" alt="Logo Instagram" class="imgs-sociais"/>
                    </a>
                    <a href="https://www.facebook.com/DREAM-Lab-Unifesp-102678821476445/">
                        <img src="../../icones/redes-sociais/facebook-claro.png" alt="Logo Facebook" class="imgs-sociais"/>
                    </a>
                    <a href="https://twitter.com/dreamlabunifesp">
                        <img src="../../icones/redes-sociais/twitter-claro.png" alt="Logo Twitter" class="imgs-sociais"/>
                    </a>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    </body>
</html>