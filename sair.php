<?php

    session_start();
    session_destroy();

    $msg= "Logout Efetuado";
    header("location:index.php?msg=".$msg);

?>