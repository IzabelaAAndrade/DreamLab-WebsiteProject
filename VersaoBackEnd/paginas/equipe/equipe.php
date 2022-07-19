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
        <link rel="stylesheet" href="equipe.css">
        <link rel="stylesheet" href="../../login/login.css">
        <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
        
    </head>
    <body>
        <header>
            <img src="../../imgs/logo-branca.png" alt="Logo DREAM Lab Unifesp" id="logo-superior"/>
            <nav class="menu">
                <ul>
                    <li class="link-trad"><a href="../../index.html">HOME</a></li>
                    <li class="dropdown">
                        <a href="index.html" class="btn-dropdown">SOBRE</a>
                        <div class="conteudo-dropdown">
                            <a href="equipe.php">EQUIPE</a>
                            <a href="../sobreLab.php">O LAB</a>
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
            <div class="conteudo-slider">
                <h2>Equipe. Grupo de Pesquisa. Amigos.</h2>
                <h4>Conheça nossos principais pesquisadores e colaboradores!</h4>
            </div>
            <div id="filtro">

            </div>
            <div class="swiffy-slider slider-item-ratio-16x9 slider-item-nogap slider-nav-autoplay" data-slider-nav-autoplay-interval="3500">
                <ul class="slider-container">
                    <li class="slide-visible">
                        <img src="../../imgs/confraternizacoes/equipe-conjunto1.jpg" class="imgs-slider"/>
                    </li>
                    <li>
                        <img src="../../imgs/confraternizacoes/equipe-conjunto2.jpg" class="imgs-slider"/>
                    </li>
                    <li>
                        <img src="../../imgs/confraternizacoes/equipe-conjunto3.png" class="imgs-slider"/>
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
            
            <section class="section-clara" id="apresentacao-clarissa">
                <div class="secao-interna" id="ap">
                    <div class="img-circular">
                        <img src="../../imgs/fotos-individuais/clarissaa.png" id="foto-orientadora"/>
                    </div>
                    <h3>Clarissa Rocha</h3>
                    <h5>CHEFE DE LABORATÓRIO</h5>
                </div>
                <div class="secao-interna" id="ap-textual">
                    <hr>
                    <p>Possui graduação em Ciências Fundamentais para Saúde pela Universidade de São Paulo (2010) e doutorado em Biotecnologia pela Universidade de São Paulo (2015). Pós-doutorado no Massachusetts Institute of Technology – MIT. Atualmente é professora adjunta no Departamento de Oncologia Clínica e Experimental da Universidade Federal de São Paulo (UNIFESP) e membro afiliada da Academia Brasileira de Ciências. Tem experiência na área de Câncer, com ênfase em Biologia Molecular, atuando principalmente nos seguintes temas: Resistência à quimioterápicos, reparo de DNA e no uso de do sistema de edição gênica CRISPR/Cas9.</p>
                    <div class="sociais-individuais">
                        <a href="https://www.instagram.com/reily_rocha/">
                            <img src="../../icones/redes-sociais/instagram-escuro.png" alt="Logo Instagram" class="imgs-sociais"/>
                        </a>
                        <a href="https://www.linkedin.com/in/clarissa-rocha-a042b680/">
                            <img src="../../icones/redes-sociais/linkedin-escuro.png" alt="Logo Linkedin" class="imgs-sociais"/>
                        </a>
                    </div>
                </div>
            </section>
            <section class="section-escura" id="parceiros">
                <h1 class="titulos-primarios-2">Laboratórios Parceiros</h1>
                <div class="parceiros">
                    <div class="quadro">
                        <img src="../../imgs/labs/butanta.jpg">
                        <h1>Lab Butantã</h1>
                        <h2>Instituto Butantã</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <button class="btn-escuro">SAIBA MAIS</button>
                    </div>
                    <div class="quadro">
                        <img src="../../imgs/labs/reparodna.png">
                        <h1>Laboratório de Reparo de DNA</h1>
                        <h2>ICB-USP</h2>
                        <p>Atividades voltadas principalmente para pesquisas relacionadas a mecanismos de reparo de DNA e mutagênese em seres vivos. As abordagens incluem estudos em células de mamíferos (inclusive, humanas) em cultura, em que busca-se aprender os mecanismos de tolerância e remoção de lesões em DNA, além de processos de sinalização de morte celular (apoptose) em células deficientes em reparo de DNA (em grande parte provenientes de pacientes com a doença genética Xeroderma pigmentosum).</p>
                        <a href="https://sites.google.com/usp.br/laboratoriodereparodedna/p%C3%A1gina-inicial?authuser=0"><button class="btn-escuro">SAIBA MAIS</button></a>
                    </div>
                    <div class="quadro">
                        <img src="../../imgs/labs/butanta.jpg">
                        <h1>Lab Butantã</h1>
                        <h2>Instituto Butantã</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                        <button class="btn-escuro">SAIBA MAIS</button>
                    </div>

                </div>
                
            </section>
            <section class="section-clara">
                <h1 class="titulos-primarios-1">Mestrandas & Doutorandas</h1>
                <h2 class="titulos-secundarios-1">Conheça nossas principais pesquisadoras no âmbito da pós-graduação.</h2>
                <div class="ap-pesquisadores">
                    <?php
                        $queryPesquisadores = "SELECT * FROM pesquisadores WHERE categoria='Mestrando(a)' OR categoria ='Doutorando(a)'";
                        $resultadoQuery = mysqli_query($conexao, $queryPesquisadores);
                        while($row_pesquisador = mysqli_fetch_assoc($resultadoQuery)){
                            ?>
                            <div class="pesquisador">
                                <div class="imgs-icones">
                                    <img src="../../login/manipulacoesbd/<?php echo $row_pesquisador['caminho_img'];?>" class="fotos-alunas">
                                </div>
                                <div class="textual">
                                    <h1><?php echo $row_pesquisador['nome'];?></h1>
                                    <h2><?php echo strtoupper($row_pesquisador['categoria']);?></h2>
                                    <p><?php echo $row_pesquisador['descricao'];?></p>
                                    <a href="apresentacao-individual.php?pesquisadora=<?php echo $row_pesquisador['id']?>"><button class="btn-escuro">SAIBA MAIS</button></a>
                                    <?php
                                        if($_SESSION['user']){
                                            ?><a href="editaPesquisador.php?pesquisadora=<?php echo $row_pesquisador['id']?>"><button class="btn-escuro edicao">EDITAR DADOS</button></a><?php
                                        }
                                    
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </section>
            <section class="section-clara">
                <h1 class="titulos-primarios-1">Estagiários(as) & Alunos de IC</h1>
                <h2 class="titulos-secundarios-1">Conheça nossas principais estudantes de graduação.</h2>
                <div class="ap-pesquisadores">
                    <?php
                        $queryICs = "SELECT * FROM pesquisadores WHERE categoria='Estagiario(a)' OR categoria ='IC'";
                        $resultadoQuery2 = mysqli_query($conexao, $queryICs);
                        while($row_ics = mysqli_fetch_assoc($resultadoQuery2)){
                            ?>
                            <div class="pesquisador">
                                <div class="imgs-icones">
                                    <img src="../../login/manipulacoesbd/<?php echo $row_ics['caminho_img'];?>" class="fotos-alunas">
                                </div>
                                <div class="textual">
                                    <h1><?php echo $row_ics['nome'];?></h1>
                                    <h2><?php echo strtoupper($row_ics['categoria']);?></h2>
                                    <p><?php echo $row_ics['descricao'];?></p>
                                    <a href="apresentacao-individual.php?pesquisadora=<?php echo $row_ics['id']?>"><button class="btn-escuro">SAIBA MAIS</button></a>
                                    <?php
                                        if($_SESSION['user']){
                                            ?><a href="editaPesquisador.php?pesquisadora=<?php echo $row_ics['id']?>"><button class="btn-escuro edicao">EDITAR DADOS</button></a><?php
                                        }
                                    
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
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