<?php

define('HOST', 'localhost');
define('USER', 'root');
define('SENHA', '');
define('BD', 'dreamlabDB');

$conexao = mysqli_connect(HOST, USER, SENHA, BD) or die ('Não foi possível efetuar a conexão com o BD :(');

?>