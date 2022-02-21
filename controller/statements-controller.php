<?php

    include('../model/database.php');

    $total_billing_select          = "select sum(value) as soma from properties a, sales b where a.id = b.property_id;";
    $efetives_clients_count_select = "select count(DISTINCT a.id) as contagem from clients a, sales b where a.id = b.client_id;";
    $clients_count_select          = "select count(id) as contagem from clients;";
    $properties_count_select       = "select count(id) as contagem from properties;";

    $total_billing_query          = mysqli_query($connection, $total_billing_select);
    $efetives_clients_count_query = mysqli_query($connection, $efetives_clients_count_select);
    $clients_count_query          = mysqli_query($connection, $clients_count_select);
    $properties_count_query       = mysqli_query($connection, $properties_count_select);

        
        while($row = mysqli_fetch_array($total_billing_query)){

            $total_billing = $row["soma"]; 

        }

        while($row = mysqli_fetch_array($efetives_clients_count_query)){

            $efetives_clients = $row["contagem"]; 

        }

        while($row = mysqli_fetch_array($clients_count_query)){

            $clients = $row["contagem"]; 

        }

        while($row = mysqli_fetch_array($properties_count_query)){

            $properties = $row["contagem"]; 

        }

