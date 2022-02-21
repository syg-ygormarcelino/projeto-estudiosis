<?php
    include("../model/database.php");

    $id = $_GET["id"];

    $update = "update sales
    set status = true
    where id = $id ; ";

    $query  = mysqli_query($connection, $update);

    if($query){
        header("Location: ../view/financial-home.php");
    }