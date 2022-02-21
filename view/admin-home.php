<?php 
    include('../app/lib/bootstrap.php');
    include('../controller/verify-login-controller.php');
?>

<head>
    <title>Old House | Administrativo</title>
    <link rel="stylesheet" href="../app/public/css/general.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand me-5 ms-3 text-white">
                <h2><img src="../app/public/img/logo.png" alt="Old House" style="width: 85px;">Old House</h2>
            </a>
            <ul class="navbar-nav ms-5" style="position: relative; left: 20%;">
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
                <li class="nav-item me-2 ms-5"  style="position: relative; left: 130%;"><a href="../controller/logout-controller.php" class="nav-link btn btn-danger text-white">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>

<section>
    <img src="../app/public/img/home-theme.jpg" alt="" class="m-5">
    <div class="w-50 ms-2 me-5 mt-3 position-absolute" id="description_div">
      <h1>
        Seu lar está aqui
      </h1>
      <br>
      <p>
      Esse é o momento de realizar o seu sonho e morar onde sempre quis! Aqui na Old House a gente tem os melhores imóveis com as melhores condições do mercado para você! Não perca tempo e viva do jeitinho que sempre quis. Aqui você pode!
      </p>
      <br>
      <p>
      E se eu te disser que estão vendendo um lote no paraíso? Morar pertinho do mar, com segurança, conforto e diversão que você e sua família merecem. Sabe o que é melhor? Você não precisa pagar muito por isso! Ligue agora para a nossa imobiliária e confira as ofertas especiais que criamos para você!
      </p>
      <br>
      <p>
      Se você tem um imóvel parado, você está perdendo dinheiro! Aqui com a Old House a gente cuida de toda a parte burocrática para você locar seu espaço e ganhar dinheiro sem preocupações. Ligue agora e fale com um dos nossos corretores, nós deixaremos sua vida mais fácil hoje mesmo.
      </p>
      <br>
      <p>
      Precisa de um lugar para morar, mas fica cansado só de ver a lista de documentos exigidos para locação? Aqui é diferente! Com experiência no mercado imobiliário, nós encontramos o seu lugar e resolvemos tudo com facilidade e rapidez. Entre em contato agora e verá como é fácil alugar! Vem com a gente!
      </p>
      <br>
      <p>
      Compra e venda de imóveis, sem burocracia e enrolação? É com a gente! Corretores com experiência no mercado e taxas justas que vão fazer você sorrir demais. Entre em contato com a nossa equipe para ter a melhor solução para o seu problema.
      </p>
    </div>
</section>

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