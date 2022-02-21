<?php 
    include('../app/lib/bootstrap.php');
    include('../app/public/native-imports.php');
    include('../controller/verify-login-controller.php');
?>

<head>
    <title>Old House | Administrativo</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand me-5 ms-3">
                <h2>Old House</h2>
            </a>
            <ul class="navbar-nav ms-5">
                <li class="nav-item me-2 ms-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPropertyModal">
                        Cadastrar imóveis
                    </button>
                </li>
                <li class="nav-item me-2 ms-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newUsersModal">
                        Cadastrar usuários
                    </button>
                </li>
                <li class="nav-item me-2 ms-5"><a href="../controller/logout-controller.php" class="nav-link btn btn-danger text-white">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="modal fade" id="newPropertyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo imóvel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../controller/new-property-controller.php" method="post">
            <label for="">Endereço</label>
            <input type="text" class="form-control" name="address">
            <label for="">Valor</label>
            <input type="number" class="form-control" name="value">
            <br>
            <input type="submit" class="btn btn-primary" value="Salvar"></button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="newUsersModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de usuários</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../controller/new-user-controller.php" method="post">
            <label for="">Nome de usuário</label>
            <input type="text" class="form-control" name="username">
            <label for="">Matrícula</label>
            <input type="text" class="form-control" name="registration">
            <label for="">Senha</label>
            <input type="password" class="form-control" name="password">
            <label for="">Cargo</label>
            <select name="group" id="group" class="form-control" name="group">
                <option value="1">Financeiro</option>
                <option value="2">Administrativo</option>
                <option value="3">Comercial</option>
                <option value="4">CEO</option>
            </select>
            <br>
            <input type="submit" class="btn btn-primary" value="Salvar"></button>
        </form>
      </div>
    </div>
  </div>
</div>