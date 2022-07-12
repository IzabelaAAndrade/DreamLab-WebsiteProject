<?php
    session_start();
    include('../verifica_login.php');

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
                            <a href="paginas/equipe.html">EQUIPE</a>
                            <a href="">O LAB</a>
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
                <h2 class="campos-log"><a href="../logout.php">Logout</a></h1>
           </section>
           <h1 class="titulos-primarios-1 pags-log">Acrescentar Novo Pesquisador</h1>
        
           <form method="POST" action="config_adc_pesquisador.php" class="form-central" enctype="multipart/form-data">
                <?php 
                    if(isset($_SESSION['falha_extensao'])):
                ?>
                <h3>Extensão de arquivo inválida para a foto de perfil.</h3>
                <?php
                    endif;
                    unset($_SESSION['falha_extensao']);
                ?>

                <?php 
                    if(isset($_SESSION['erro_salvar'])):
                ?>
                <h3>Problema no armazenamento da foto.</h3>
                <?php
                    endif;
                    unset($_SESSION['erro_salvar']);
                ?>
                
                <?php 
                    if(isset($_SESSION['falha_arquivo'])):
                ?>
                <h3>Problema no envio da foto. Tente novamente.</h3>
                <?php
                    endif;
                    unset($_SESSION['falha_arquivo']);
                ?>
                
                <?php 
                    if(isset($_SESSION['adicao_sucesso'])):
                ?>
                <h3>Pesquisador Cadastrado com Sucesso!</h3>
                <?php
                    endif;
                    unset($_SESSION['adicao_sucesso']);
                ?>
                <label for="user">Nome do Pesquisador:</label>
                <input type="text" name="nome" placeholder="Quem é esse pesquisador? " id="nome" required>
                <label for="categoria"> Selecione a categoria que melhor descreve o pesquisador:</label>
                <select name="categoria" id="categoria" required>
                    <option value="IC">Aluno de IC</option>
                    <option value="Estagiario(a)">Estagiário(a)</option>
                    <option value="Mestrando(a)">Mestrando(a)</option>
                    <option value="Doutorando(a)">Doutorando(a)</option>
                </select>
                <label for="lattes">Url Lattes: </label>
                <input type="text" name="lattes" placeholder="Esse pesquisador tem currículo lattes? Qual o link?" id="lattes" required>
                <label for="user">Url Linkedin: </label>
                <input type="text" name="linkedin" placeholder="Esse pesquisador tem Linkedin? Qual o link?" id="linkedin" required>
                <label for="descricao">Descrição:</label>
                <textarea rows="10" cols="30" maxlength="2000" name="descricao" placeholder="Um pouco sobre você :)" id="descricao" required></textarea>
                <label for="publicacoes">Publicações:</label>
                <textarea rows="10" cols="30" maxlength="2000" name="publicacoes" placeholder="Referências para artigos publicados ou menções na mídia." id="publicacoes" required></textarea>
                <label for="img-pesquisador">Foto de Perfil</label>
                <input type="file" name="img-pesquisador" id="img-pesquisador">
                <input type="submit" class="btn-escuro">
           </form>
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