<?php
    include('login/conexao.php');
    session_start();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | DREAM LAB</title>
        <link rel="icon" href="icones/favicondream1.png">
        <!-- Inclusão de Fontes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Raleway:wght@100;400&display=swap" rel="stylesheet">
        <!-- Inclusão de Arquivos CSS -->
        <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="base.css">
        
    </head>
    <body>
        <header>
            <img src="imgs/logo-branca.png" alt="Logo DREAM Lab Unifesp" id="logo-superior"/>
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
                    <li class="link-trad"><a href="index.php">HOME</a></li>
                    <li class="dropdown">
                        <a href="index.php" class="btn-dropdown">SOBRE</a>
                        <div class="conteudo-dropdown">
                            <a href="paginas/equipe/equipe.php">EQUIPE</a>
                            <a href="paginas/sobreLab.php">O LAB</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="index.php" class="btn-dropdown">PESQUISA</a>
                        <div class="conteudo-dropdown">
                            <a href="">BIOTÉRIO DE CÉLULAS</a>
                            <a href="">TRATAMENTOS</a>
                        </div>
                    </li>
                    <li class="link-trad"><a href="paginas/calculadora/ferramentas.php">FERRAMENTAS</a></li>
                    <li class="link-trad"><a href="index.php">MENÇÕES</a></li>
                    <li class="link-trad"><a href="index.php">GALERIA</a></li>
                    <li class="link-trad"><a href="index.php">CONTATO</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="conteudo-slider">
                <h2>Bem vindo ao DREAM Lab!</h2>
                <h4><b>D</b>rug <b>Re</b>sistance <b>a</b>nd <b>M</b>utagenesis Lab</h4>
                <button class="btn-escuro">CONHEÇA</button>
            </div>
            <div id="filtro">

            </div>
            <div class="swiffy-slider slider-item-ratio-16x9 slider-item-nogap slider-nav-autoplay" data-slider-nav-autoplay-interval="3500">
                <ul class="slider-container">
                    <li class="slide-visible">
                        <img src="imgs/carousel-home/microscopio.jpg" class="imgs-slider"/>
                    </li>
                    <li>
                        <img src="imgs/carousel-home/pipetando.jpg" class="imgs-slider"/>
                    </li>
                    <li>
                        <img src="imgs/carousel-home/celulas.jpg" class="imgs-slider"/>
                    </li>
                </ul>
            
                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>
            
                <ul class="slider-indicators">
                    <li class=""></li>
                    <li class=""></li>
                    <li class="active"></li>
                </ul>
            </div>
            
            <section class="section-clara">
                <h1 class="titulos-primarios-1">O laboratório</h1>
                <p class="paragrafos-primarios-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam augue risus, rutrum sed nisl eu, ultrices ullamcorper mauris. Fusce consectetur vel purus at tempor. Aliquam vel ante malesuada, porta lacus sed, feugiat ante. Cras porttitor urna lacus, quis mollis mi posuere sed. Ut placerat risus et nulla ultricies, id posuere sapien rutrum. Mauris dui nunc, ornare in fringilla quis, commodo at urna. Curabitur in justo sed diam maximus aliquet et quis lectus. Suspendisse potenti.</p>
                <button class="btn-escuro">CONHEÇA</button>
            </section>
            <section class="section-escura">
                <h1 class="titulos-primarios-2">Principais Linhas de Pesquisa</h1>
                <div id="organiza-colunas">
                    <div class="colunas-exp">
                        <hr class="divisor-linhasp">
                        <h2 class="titulo-secundario">Indução de Ferroptose</h2>
                        <p class="paragrafos-primarios-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                    <div class="colunas-exp">
                        <hr class="divisor-linhasp">
                        <h2 class="titulo-secundario">Linhagens Resistentes</h2>
                        <p class="paragrafos-primarios-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                    <div class="colunas-exp">
                        <hr class="divisor-linhasp">
                        <h2 class="titulo-secundario">Modulação de Clones</h2>
                        <p class="paragrafos-primarios-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                </div>
            </section>
            <section class="section-clara" id="comunidade-valores">
                <div>
                    <div id="textos-ap" class="texto-foto-ap">
                        <h3 class="subtitulo-claro">UM POUCO SOBRE...</h3>
                        <h1 id="titulo-maior">Comunidade
                            <br>& Valores
                        </h1>
                        <hr id="mini-hr">
                    </div>
                    <div class="texto-foto-ap tf">
                        <img src="imgs/team/dreamlabpics.jpg" alt="Fotos polaroid de parte da equipe do DREAM Lab">
                        <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                    <div class="texto-foto-ap tf">
                        <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <img src="imgs/cells.jpg" alt="Fotos polaroid de parte da equipe do DREAM Lab">
                    </div>
                </div>
            </section>
        </main>


        <footer>
            <img src="imgs/logo-branca.png" alt="Logo DREAM Lab Unifesp" id="logo-inferior"/>
            <div id="conteudo-footer">
                <h3>FAÇA UMA VISITA</h3>
                <p>Rua Dr. Diogo de Faria, 824 <br>
                    5 andar – Vila Clementino, São Paulo – SP, 55397-289</p>
                <div class="icones-sociais">
                    <a href="https://www.instagram.com/dreamlab.unifesp/">
                        <img src="icones/redes-sociais/instagram-claro.png" alt="Logo Instagram" class="imgs-sociais"/>
                    </a>
                    <a href="https://www.facebook.com/DREAM-Lab-Unifesp-102678821476445/">
                        <img src="icones/redes-sociais/facebook-claro.png" alt="Logo Facebook" class="imgs-sociais"/>
                    </a>
                    <a href="https://twitter.com/dreamlabunifesp">
                        <img src="icones/redes-sociais/twitter-claro.png" alt="Logo Twitter" class="imgs-sociais"/>
                    </a>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    </body>
</html>