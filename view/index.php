<?php 
    include('../app/lib/bootstrap.php');
?>

<head>
    <title>Old House | Login</title>

    <link rel="stylesheet" href="../app/public/css/login-page.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-5">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand me-5 ms-3 text-white">
                <h2><img src="../app/public/img/logo.png" alt="Old House" style="width: 85px;">Old House</h2>
            </a>
            <ul class="navbar-nav ms-5">
                
            </ul>
        </div>
    </nav>
</header>

<form action="../controller/login-controller.php" method="post" class="container w-25 t-25 mt-5 p-5" id="login_form">
    <div class="form-group row">
    <h6><label for="" class="text-white text-start">Matrícula</label></h6>
        <input type="text" name="registration" id="" class="form-control mb-4 input_login">
    </div>
    <div class="form-group row">
        <h6><label for="" class="text-white text-start">Senha</label></h6>
        <input type="password" name="password" id="" class="form-control  mb-4 input_login">
    </div>
    <div class="form-group row">
        <input type="submit" value="Entrar" class="btn btn-outline-info mb-4"><input type="reset" value="Limpar" class="btn btn-outline-danger mb-4">
    </div>
    
</form>