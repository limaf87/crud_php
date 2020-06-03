<?php
    include_once 'autenticacao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        function delUser(cod){
            if(confirm('Deseja Realmente Excluir esse Usuário?')){
                location.href="excluir-usuario.php?cod="+cod;
            }
        }
    </script>
    <title>Consultar Usuario</title>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>
    <div class="container">
        <div class="card-panel">
            <h3>Consultar Usuário</h3>
            <form action="consultar-usuario.php" method="get" autocomplete="off">
                <input type="text" name="nome" placeholder="Digite para Pesquisar">
                <input type="submit" value="Pesquisar" class="btn">
            </form>

            <?php
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];

                include_once 'conexao.php';

                $sql = "select * from usuario where nome like '".$nome."%' order by nome";

                $result = mysqli_query($con,$sql);

                if(mysqli_num_rows($result) > 0){
                    ?>
                    <table class="striped">
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Login</th>
                            <th>Senha</th>
                            <th>Perfil</th>
                            <?php 
                                if($_SESSION["perfil"] == "adm"){
                                    ?>
                            <th>Editar</th>
                            <th>Excluir</th>
                                <?php } ?>
                        </tr>
                    <?php
                        while($row = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <td><?php echo $row["nome"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["login"]; ?></td>
                            <td><?php echo $row["senha"]; ?></td>
                            <td><?php echo $row["perfil"]; ?></td>
                            <?php if($_SESSION["perfil"] == "adm"){ ?>
                            <td>
                                <a href="editar-usuario.php?cod=<?php echo $row["cod"]; ?>"><i class="material-icons orange-text">edit</i></a>
                                <a href="editar-senha.php?cod=<?php echo $row["cod"]; ?>"><i class="material-icons blue-text">mode_edit</i></a>
                            </td>
                            <td><a href="#" onclick="delUser('<?php echo $row['cod']; ?>')"><i class="material-icons red-text">delete_forever</i></a></td>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </table>
                    
                    <?php
                }else{
                     echo "<p>Nenhum usuario encontrado!!</p>";
                }
                mysqli_close($con);
            } 
            ?>
        </div>
    </div>
</body>
</html>