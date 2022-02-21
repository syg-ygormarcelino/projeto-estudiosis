<?php 
    include('../app/lib/bootstrap.php');
    include('../app/public/native-imports.php');
    include('../controller/verify-login-controller.php');
    include('../controller/statements-controller.php');
?>

<head>
    <title>Old House | CEO</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand me-5 ms-3">
                <h2>Old House</h2>
            </a>
            <ul class="navbar-nav ms-5">
                <li class="nav-item me-2 ms-5"><a href="../controller/logout-controller.php" class="nav-link btn btn-danger text-white">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>

<table class="table mt-5">
    <thead class="table-primary">
        <tr>
            <th>Faturamento total da imobiliária</th>
            <th>Quantidade de clientes que já efetuaram compras</th>
            <th>Quantidade de clientes cadastrados</th>
            <th>Quantidade de imóveis cadastrados</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>R$ <?php echo $total_billing ?></th>
            <th> <?php echo $efetives_clients ?></th>
            <th> <?php echo $clients ?></th>
            <th> <?php echo $properties ?></th>
        </tr>
    </tbody>
</table>