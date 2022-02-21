<?php

    include("../model/database.php");

    $username     = isset($_POST["username"]) ? $_POST["username"] : null;
    $registration = isset($_POST["registration"]) ? $_POST["registration"] : null;
    $password     = isset($_POST["password"]) ? $_POST["password"] : null;
    $group        = $_POST["group"];

    if($username == null || $password == null || $password == null){
        echo "<script>alert('Todos os campos devem estar preenchidos')</script>";
    }else{

        $insert = "insert into users (username,registration,password,group_id) values ('$username','$registration','$password','$group');";
    
        try{

            $query = mysqli_query($connection, $insert);
            
            if($query){           
                header('Location: ../view/admin-home.php');
            }else{
                echo "<script>alert('Falha ao cadastrar usuário')</script>";
            }
        }catch(Exception $e){
                echo $e;
        }
    }
    

?>