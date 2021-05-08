<?php require 'pages/header.php'; ?>

    <div class="container">
        <h1>Login</h1>
        <?php require 'classes/usuarios.class.php';
        $u = new Usuarios();
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha']; 
            
            if ($u->login($email, $senha)) {
                ?>
            <script type="text/javascript">window.location.href="./";</script>
            <?php 
        } else {
            ?>
            <div class="alert alert-danger">
                Usúarios e/ou Senha incorretos!
            </div>
            <?php
        }


    }
    ?>
     <form method="POST">

            <div class="form-group">
                <label for="rmail">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" value="Entrar" class="btn btn-dark">  
            </div>
        </form>
    </div>

<?php require 'pages/footer.php'; ?>

