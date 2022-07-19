<?php
    include('../../login/conexao.php');
    session_start();
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
        <link rel="stylesheet" href="../../base.css">
        <link rel="stylesheet" href="../equipe/equipe.css">
        <link rel="stylesheet" href="../../login/login.css">
        <link rel="stylesheet" href="../paginas.css">
        <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
        
    </head>
    <body>
        <header>
            <img src="../../imgs/logo-branca.png" alt="Logo DREAM Lab Unifesp" id="logo-superior"/>
            <?php
                if(@$_SESSION['user']){ 
            ?>
                <section id="infos-login" class="ajuste-login">
                    <h2 class="campos-log">Olá, <?php echo $_SESSION['user']?></h2>
                    <h2 class="campos-log"><a href="login/logout.php">Logout</a></h1>
                </section>
            <?php 
            
                }else{
                ?>
                    <section id="infos-login" class="ajuste-login">
                        <h2 class="campos-log">Bem vinde!</h2>
                        <h2 class="campos-log"><a href="login/indexLogin.php">Efetuar Login</a></h1>
                    </section>

                <?php
                }
            
            ?>
            <nav class="menu">
                <ul>
                    <li class="link-trad"><a href="../../index.php">HOME</a></li>
                    <li class="dropdown">
                        <a href="index.php" class="btn-dropdown">SOBRE</a>
                        <div class="conteudo-dropdown">
                            <a href="../equipe/equipe.php">EQUIPE</a>
                            <a href="../sobreLab.php">O LAB</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="index.php" class="btn-dropdown">PESQUISA</a>
                        <div class="conteudo-dropdown">
                            <a href="">BIOTÉRIO DE CÉLULAS</a>
                            <a href="">TRATAMENTOS</a>
                        </div>
                    </li>
                    <li class="link-trad"><a href="ferramentas.php">FERRAMENTAS</a></li>
                    <li class="link-trad"><a href="index.php">MENÇÕES</a></li>
                    <li class="link-trad"><a href="index.php">GALERIA</a></li>
                    <li class="link-trad"><a href="index.php">CONTATO</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div id="superior-media2">
                <!-- Imagem média superior, adição no CSS -->
            </div>
            <section class="section-clara">
                <h1 class="titulos-primarios-1">Ferramentas</h1>
                <h2 class="titulos-secundarios-1">Cálculos repetitivos ao realizar experimentos no laboratório? 
                    <br>Acesse nossas calculadoras especializadas e encontre os valores para seus projetos de maneira rápida e eficiente.
                </h2>
            </section>
            <section class="section-escura">
                <h1 class="titulos-primarios-2">Calculadora de Plaqueamento</h1>
                <h2 class="titulos-secundarios-2">Descubra quantos mLs de mistura com células deverá adicionar em cada poço, tal como 
                    o quanto será necessário completar com meio.
                </h2>
                <form class="form-js-claro">
                </form>
            </section>
            <section class="section-clara">
                <h1 class="titulos-primarios-1">Conversões Entre Placas</h1>
                <h2 class="titulos-secundarios-1">Precisa saber qual a quantidade de células necessárias em uma placa de um
                    número diferente de poços? Deixa com a gente :)
                </h2>
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