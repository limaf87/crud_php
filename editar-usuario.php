<?php
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Editar Usuarios</title>
</head>
<body>
    <?php
        include_once 'header.php';

        $cod = $_GET["cod"];

        include_once 'conexao.php';

        $sql = "select * from usuario where cod=".$cod;

        $result = mysqli_query($con,$sql);       
        
        $row = mysqli_fetch_array($result);

        mysqli_close($con);

    ?>
<div class="container">
    <div class="card-panel">
        <h3>Editar Usuarios</h3>
        <form action="atualizar-usuario.php" method="post" autocomplete="off">
            <input type="hidden" name="cod" value="<?php echo $row["cod"]; ?>">
            <input type="text" name="nome" placeholder="Digite o nome" value="<?php echo $row["nome"]; ?>">
            <input type="email" name="email" placeholder="Digite o email" value="<?php echo $row["email"]; ?>">
            <input type="text" name="login" placeholder="Digite o login" value="<?php echo $row["login"]; ?>">
            <p>
                <label>
                    <input type="radio" name="perfil" value="adm" <?php if($row["perfil"] == "adm") {echo "checked";}?>>
                    <span>Adm</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="radio" name="perfil" value="user" <?php if($row["perfil"] == "user") {echo "checked";}?>>
                    <span>User</span>
                </label>
            </p>
            <input type="submit" value="Editar" class="btn">
        </form>
    </div>
</div>
</body>
</html>