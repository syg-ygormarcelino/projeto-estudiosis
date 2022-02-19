<?php
    session_start();
    include('../model/database.php');

    if(empty($_POST['registration']) || empty($_POST['password'])){
        header('Location: ../view/');
        exit();
    }

    $registration = $_POST['registration'];
    $password     = $_POST['password'];
    
    $verify_select = "select a.id from groups a,users b where b.registration = '$registration' and b.password = '$password' and b.group_id = a.id;";

    $verify_query = mysqli_query($connection, $verify_select);

    if(mysqli_num_rows($verify_query) > 0){
        while($verify_row = mysqli_fetch_array($verify_query)){
            $id = $verify_row["id"]; 
        }

        if($id == 1){
            $_SESSION['reg'] = $registration;
            echo "Logado como financeiro";
            header('Location: ../view/financial-home.php');
            exit();
        }else if($id == 2){
            $_SESSION['reg'] = $registration;
            echo "Logado como administrativo";
            header('Location: ../view/admin-home.php');
            exit();
        }else if($id == 3){
            $_SESSION['reg'] = $registration;
            echo "Logado como comercial";
            header('Location: ../view/comercial-home.php');
            exit();
        }else if($id == 4){
            $_SESSION['reg'] = $registration;
            echo "Logado como CEO";
            header('Location: ../view/ceo-home.php');
            exit();
        }

    }else{

        echo "Dados de login incorretos";

    }

    