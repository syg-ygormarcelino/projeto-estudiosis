<?php

    include("../model/database.php");

    $address     = isset($_POST["address"]) ? $_POST["address"] : null;
    $value = isset($_POST["value"]) ? $_POST["value"] : null;

    if($address == null || $value == null){
        echo "<script>alert('Todos os campos devem estar preenchidos')</script>";
    }else{

        $insert = "insert into properties (value, address) values ('$value','$address');";
    
        try{

            $query = mysqli_query($connection, $insert);
            
            if($query){           
                header('Location: ../view/admin-home.php');
            }else{
                echo "<script>alert('Falha ao cadastrar imóvel')</script>";
            }
        }catch(Exception $e){
                echo $e;
        }
    }
    

?>