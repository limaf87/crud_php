<?php
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <title>Painel</title>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>

    <div class="container">
        <h6>Seja Bem Vindo(a)<?php echo $_SESSION["nome"]; ?></h6>
    </div>
</body>
</html>