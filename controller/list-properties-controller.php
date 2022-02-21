<?php

    include("../model/database.php");

    $property_id_array = [];
    $property_value_array = [];
    $property_address_array = [];

    $select = "select id,address,value from properties";

    $query = mysqli_query($connection, $select);

    if(mysqli_num_rows($query) > 0){
        
        while($row = mysqli_fetch_array($query)){

            $id = $row["id"]; 
            $address  = $row["address"];
            $value = $row["value"];

            array_push($property_id_array,$id);
            array_push($property_value_array,$value);
            array_push($property_address_array,$address);

        }

    }

    