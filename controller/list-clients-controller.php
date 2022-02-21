<?php

    include("../model/database.php");

    $client_id_array = [];
    $client_name_array = [];

    $select = "select id,name from clients";

    $query = mysqli_query($connection, $select);

    if(mysqli_num_rows($query) > 0){
        
        while($row = mysqli_fetch_array($query)){

            $id = $row["id"]; 
            $name  = $row["name"];

            array_push($client_id_array,$id);
            array_push($client_name_array,$name);

        }

    }

    