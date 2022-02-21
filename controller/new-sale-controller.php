<?php

    include("../model/database.php");

    $client        = $_POST["client"];
    $property      = $_POST["property"];
   
    $insert = "insert into sales (client_id, property_id, status) values ('$client','$property', false);";

    try{
        $query = mysqli_query($connection, $insert);
        
        if($query){           
            header('Location: ../view/comercial-home.php');
        }else{
            echo "<script>alert('Falha ao efetuar a venda')</script>";
        }
    }catch(Exception $e){
            echo $e;
    }
   
    

?>