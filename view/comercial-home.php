<?php 
    include('../app/lib/bootstrap.php');
    include('../app/public/native-imports.php');
    include('../controller/verify-login-controller.php');
    include('../controller/list-clients-controller.php');
    include('../controller/list-properties-controller.php');
?>

<head>
    <title>Old House | Comercial</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand me-5 ms-3">
                <h2>Old House</h2>
            </a>
            <ul class="navbar-nav ms-5">
                <li class="nav-item me-2 ms-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newSaleModal">
                        Fazer uma venda
                    </button>
                </li>
                <li class="nav-item me-2 ms-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newClientModal">
                        Cadastrar clientes
                    </button>
                </li>
                <li class="nav-item me-2 ms-5"><a href="../controller/logout-controller.php" class="nav-link btn btn-danger text-white">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="modal fade" id="newClientModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../controller/new-client-controller.php" method="post">
            <label for="">Nome</label>
            <input type="text" class="form-control" name="name">
            <br>
            <input type="submit" class="btn btn-primary" value="Salvar"></button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="newSaleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova venda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../controller/new-sale-controller.php" method="post">
            <label for="">Cliente</label>
            <select name="client" id="" class="form-control">
                <?php 
                    for($i=0;$i<sizeof($client_id_array);$i++){

                        echo "<option value='$client_id_array[$i]'>$client_name_array[$i]</option>";
                        
                    }
                ?>
            </select>
            <label for="">Imóvel</label>
            <select name="property" id="" class="form-control">
                <?php 
                    for($i=0;$i<sizeof($property_id_array);$i++){

                        echo "<option value='$property_id_array[$i]'>Endereço: $property_address_array[$i] | Valor: $property_value_array[$i]</option>";
                        
                    }
                ?>
            </select>
            <br>
            <input type="submit" class="btn btn-primary" value="Salvar"></button>
        </form>
      </div>
    </div>
  </div>
</div>



        