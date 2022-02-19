<?php 
    include('../app/lib/bootstrap.php');
    include('../app/public/native-imports.php');
?>

<head>
    <title>Old House | Login</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand me-5 ms-3">
                <h2>Old House</h2>
            </a>
            <ul class="navbar-nav ms-5">
                
            </ul>
        </div>
    </nav>
</header>

<form action="../controller/login-controller.php" method="post" class="container w-25 t-25 mt-5">
    <div class="form-group row">
    <h4><label for="">Marícula</label></h4>
        <input type="text" name="registration" id="" class="form-control mb-4">
    </div>
    <div class="form-group row">
        <h4><label for="">Senha</label></h4>
        <input type="password" name="password" id="" class="form-control  mb-4">
    </div>
    <div class="form-group row">
        <input type="submit" value="Entrar" class="btn btn-info mb-4"><input type="reset" value="Limpar" class="btn btn-danger mb-4">
    </div>
    
</form>