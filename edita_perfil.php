<?php
 session_start();

    
    $_SESSION['mensagem_perfil'] = $_POST['editar-texto'];
    header('Location: perfil.php');

    
?>