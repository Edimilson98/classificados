<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vendas</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">  
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/script.js"></script>  
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="#">Compra e Venda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav">
        <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
        <li class="nav-item"><a class="nav-link" href="">
            <?php
            require 'classes/usuarios.class.php';
            $u = new Usuarios();
            $nameuser = $u->getNamelogin();
            echo "Olá! ".$nameuser['nome'];
            ?>
        </a></li>
        <li class="nav-item">
            <a class="nav-link" href="meus_anuncios.php">Meus Anúncios</a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="sair.php">Sair</a>
        </li>
        <?php else: ?>
        
            <li class="nav-item">
                <a class="nav-link" href="cadastrar.php">Cadastre-se</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
    </nav>
    <br>