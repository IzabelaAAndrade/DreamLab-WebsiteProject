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
        <link rel="stylesheet" href="../../login/login.css">
        <link rel="stylesheet" href="equipe.css">
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
                            <a href="equipe.php">EQUIPE</a>
                            <a href="">O LAB</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="index.php" class="btn-dropdown">PESQUISA</a>
                        <div class="conteudo-dropdown">
                            <a href="">BIOTÉRIO DE CÉLULAS</a>
                            <a href="">TRATAMENTOS</a>
                        </div>
                    </li>
                    <li class="link-trad"><a href="index.php">FERRAMENTAS</a></li>
                    <li class="link-trad"><a href="index.php">MENÇÕES</a></li>
                    <li class="link-trad"><a href="index.php">GALERIA</a></li>
                    <li class="link-trad"><a href="index.php">CONTATO</a></li>
                </ul>
            </nav>
        </header>
        <main>
        <section class="section-clara">
            <?php
                $pesquisadorSelecionado = $_GET['pesquisadora'];
                $queryPesquisadorIndv = "SELECT * FROM pesquisadores WHERE id={$pesquisadorSelecionado}";
                $resultadoQuery = mysqli_query($conexao, $queryPesquisadorIndv);
                $dados = mysqli_fetch_assoc($resultadoQuery);
            ?>
            
            <h1 class="titulos-primarios-1 pags-log">Editar Dados do Pesquisador</h1>
            <form method="POST" action="../../login/manipulacoesbd/config_edita_pesquisadores.php" class="form-central" enctype="multipart/form-data">
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
                    if(isset($_SESSION['edicao_sucesso'])):
                ?>
                <h3>Dados do Pesquisador Editados com Sucesso!</h3>
                <?php
                    endif;
                    unset($_SESSION['edicao_sucesso']);
                ?>
                <label for="user">Nome do Pesquisador:</label>
                <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" id="nome" required>
                <label for="categoria"> Selecione a categoria que melhor descreve o pesquisador:</label>
                <select name="categoria" id="categoria" required>
                    <option value="IC">Aluno de IC</option>
                    <option value="Estagiario(a)">Estagiário(a)</option>
                    <option value="Mestrando(a)">Mestrando(a)</option>
                    <option value="Doutorando(a)">Doutorando(a)</option>
                </select>
                <label for="lattes">Url Lattes: </label>
                <input type="text" name="lattes" value="<?php echo $dados['lattes']; ?>" id="lattes" required>
                <label for="user">Url Linkedin: </label>
                <input type="text" name="linkedin" value="<?php echo $dados['linkedin']; ?>" id="linkedin" required>
                <label for="descricao">Descrição:</label>
                <textarea rows="10" cols="30" maxlength="2000" name="descricao" id="descricao" required><?php echo $dados['descricao']; ?></textarea>
                <label for="publicacoes">Publicações:</label>
                <textarea rows="10" cols="30" maxlength="2000" name="publicacoes" id="publicacoes" required><?php echo $dados['publicacoes'];?></textarea>
                <label for="img-pesquisador">Foto de Perfil: Adicionar Nova</label>
                <input type="file" name="img-pesquisador" id="img-pesquisador">
                <input id="dado-id" name="dado_id" value="<?php echo $dados['id']; ?>">
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