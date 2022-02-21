<?php

    include("../model/database.php");

    $name     = isset($_POST["name"]) ? $_POST["name"] : null;

    if($name == null){
        echo "<script>alert('Todos os campos devem estar preenchidos')</script>";
    }else{

        $insert = "insert into clients (name) values ('$name');";
    
        try{

            $query = mysqli_query($connection, $insert);
            
            if($query){           
                header('Location: ../view/comercial-home.php');
            }else{
                echo "<script>alert('Falha ao cadastrar cliente')</script>";
            }
        }catch(Exception $e){
                echo $e;
        }
    }
    

?>