<?php
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        function confirmaExclusao(cod){
            if(confirm('Deseja Realmente Excluir esse Cliente ?')){
                location.href="excluir-cliente.php?cod="+cod;
            }
        }
    </script>
    <title>Consultar Clientes</title>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>
    <div class="container">
        <div class="card-panel">
            <h3>Consultar Clientes</h3>
            <form action="consultar-cliente.php" method="get" autocomplete="off">
                <input type="text" name="nome" placeholder="Digite para Pesquisar">
                <input type="submit" value="Pesquisar" class="btn">
            </form>
            <?php
               if(isset($_GET["nome"])){
                    $nome = $_GET["nome"];

                include_once 'conexao.php';

                $sql = "select * from cliente where nome like '".$nome."%' order by nome";
                
                $result = mysqli_query($con,$sql);
                
                if(mysqli_num_rows($result) > 0){
                    ?>
                    <table class="striped">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>CPF</th>
                            <th>Sexo</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    <?php 
                        while($row = mysqli_fetch_array($result)){                        
                    ?>
                        <tr>
                            <td><?php echo $row["nome"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["cpf"]; ?></td>
                            <td><?php echo $row["sexo"]; ?></td>
                            <td><a href="editar-cliente.php?cod=<?php echo $row["cod"]; ?>"><i class="material-icons orange-text">edit</i></a></td>
                            <td><a href="#" onclick="confirmaExclusao(<?php echo $row['cod']; ?>)"><i class="material-icons red-text">delete_forever</i></a></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <?php
                }else{
                    echo "<p>Nenhum Cliente Encontrado!!</p>";
                }

                mysqli_close($con);
               }
            ?>
        </div>        
    </div>
</body>
</html>