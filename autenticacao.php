<?php

    session_start(); 

    //(!) -> negação
    //se não existir a sessão nome
    if(!isset($_SESSION["nome"])){
        session_destroy();

        $msg = "Acesso negado!!!";
        header("location:index.php?msg=".$msg);
    }

?>