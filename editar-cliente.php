<?php
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Editar Clientes</title>
</head>
<body>
    <?php
        include_once 'header.php';

        $cod = $_GET["cod"];

        include_once 'conexao.php';

        $sql = "select * from cliente where cod=".$cod;

        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($result);
        
        mysqli_close($con);
        
    ?>
    <div class="container">
        <div class="card-panel">
            <h3>Editar Clientes</h3>
            <form action="atualizar-cliente.php" method="post" autocomplete="off">
                <input type="hidden" name="cod" value="<?php echo $row["cod"]; ?>">
                <input type="text" name="nome" placeholder="Digite o Nome" value="<?php echo $row["nome"]; ?>">
                <input type="email" name="email" placeholder="Digite o Email" value="<?php echo $row["email"]; ?>">
                <input type="text" name="cpf" placeholder="Digite o CPF" maxlength="11" value="<?php echo $row["cpf"]; ?>">
                <p>
                    <label>
                        <input type="radio" name="sexo" value="M" <?php if($row["sexo"] == "M"){echo "checked";}?>>
                        <span>Masculino</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="radio" name="sexo" value="F" <?php if($row["sexo"] == "F"){ echo "checked";} ?>>
                        <span>Feminino</span>
                    </label>
                </p>
                <input type="submit" value="Editar"  class="btn">
            </form>
            
        </div>
    </div>
</body>
</html>