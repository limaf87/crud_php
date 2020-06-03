<?php
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>
    <div class="container">
        <div class="card-panel">
            <h3>Cadastro de Clientes</h3>
            <form action="gravar-cliente.php" method="post" autocomplete="off">
                <input type="text" name="nome" placeholder="Digite o Nome">
                <input type="email" name="email" placeholder="Digite o Email">
                <input type="text" name="cpf" placeholder="Digite o CPF" maxlength="11" >
                <p>
                    <label>
                        <input type="radio" name="sexo" value="M">
                        <span>Masculino</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="radio" name="sexo" value="F">
                        <span>Feminino</span>
                    </label>
                </p>
                <input type="submit" value="Cadastrar"  class="btn">
            </form>
            
        </div>
    </div>
</body>
</html>