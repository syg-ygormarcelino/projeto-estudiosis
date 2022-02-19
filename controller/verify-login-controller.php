<?php
    session_start();
    if(!$_SESSION['reg']){
        header('Location: ../view/');
        exit();
    }
?>