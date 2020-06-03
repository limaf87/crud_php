<?php
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Alterar Senha</title>
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
        <h3>Alterar Senha do Usuarios</h3>
        <form action="atualizar-senha.php" method="post" autocomplete="off">
            <input type="hidden" name="cod" value="<?php echo $row["cod"]; ?>">
            <input type="text" name="senha" placeholder="Digite a senha" value="<?php echo $row["senha"]; ?>">
           
            <input type="submit" value="Alterar" class="btn">
        </form>
    </div>
</div>
</body>
</html>