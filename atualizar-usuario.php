<?php
    $cod = $_POST["cod"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $perfil = $_POST["perfil"];

    include_once 'conexao.php';

    $sql = "update usuario set nome= '".$nome."',
    email= '".$email."', perfil= '".$perfil."' where cod=".$cod;

    if(mysqli_query($con,$sql)){
        $msg = "Editado com Sucesso!!";
    }else{
        $msg = "Erro ao Editar!!";
    }
    mysqli_close($con);

?>
<script>
    alert('<?php echo $msg; ?>');
    location.href="painel.php";
</script>