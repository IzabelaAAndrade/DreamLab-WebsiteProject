<?php
@session_start();
if(!$_SESSION['user']){
    header('Location: indexLogin.php');
    exit();
}

?>