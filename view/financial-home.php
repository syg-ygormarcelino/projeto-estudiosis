<?php 
    include('../app/lib/bootstrap.php');
    include('../app/public/native-imports.php');
    include('../controller/verify-login-controller.php');
    include("../controller/list-sales-controller.php");
?>

<head>
    <title>Old House | Financeiro</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand me-5 ms-3">
                <h2>Old House</h2>
            </a>
            <ul class="navbar-nav ms-5">
                <li class="nav-item me-2 ms-5"><a href="../controller/logout-controller.php" class="nav-link btn btn-danger">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>

<table class="table mt-5">
    <thead class="table-primary">
        <tr>
            <th>Cliente</th>
            <th>Endereço do Imóvel</th>
            <th>Valor do Imóvel</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
            <?php 
                if(mysqli_num_rows($query) > 0){
        
                    $c = 0;
                    while($row = mysqli_fetch_array($query)){
            
                        $id = $row["id"]; 
                        $status = $row["status"];
                        $name  = $row["name"];
                        $address = $row["address"];
                        $value = $row["value"];
                        
                        if($status != true){
                            $status = "<a href='../controller/update-sale.php?id=$id' class='btn btn-warning'>Aprovar</a>";
                        }else{
                            $status = "Aprovada";
                        }

                        echo "<tr><th>$name</th><th>$address</th><th>$value</th><th>$status</th></tr>";
                    }
            
                }
            ?>
    </tbody>
</table>