<?php

    include("../model/database.php");

    $sale_id_array = [];
    $sale_status_array = [];
    $property_address_array = [];
    $property_value_array = [];
    $client_name_array = [];

    $select = "select a.id, b.name, c.address, c.value, a.status from sales a, clients b, properties c where b.id = a.client_id  and c.id = a.property_id";

    $query = mysqli_query($connection, $select);

    


    