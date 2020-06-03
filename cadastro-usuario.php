<?php
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Cadastro de Usuarios</title>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>
<div class="container">
    <div class="card-panel">
        <h3>Cadastro de Usuarios</h3>
        <form action="gravar-usuario.php" method="post" autocomplete="off">
            <input type="text" name="nome" placeholder="Digite o nome">
            <input type="email" name="email" placeholder="Digite o email">
            <input type="text" name="login" placeholder="Digite o login">
            <input type="text" name="senha" placeholder="Digite a senha">
            <p>
                <label>
                    <input type="radio" name="perfil" value="adm">
                    <span>Adm</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="radio" name="perfil" value="user">
                    <span>User</span>
                </label>
            </p>
            <input type="submit" value="Cadastrar" class="btn">
        </form>
    </div>
</div>
</body>
</html>