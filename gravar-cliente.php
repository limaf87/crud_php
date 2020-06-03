<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $sexo = $_POST["sexo"];

    include_once 'conexao.php';

    $sql = "insert into cliente values(null,'".$nome."','".$email."','".$cpf."','".$sexo."')";
    
    if(mysqli_query($con,$sql)){
        $msg = "Cadastrado com Sucesso!!";
    }else{
        $msg = "Erro ao Cadastrar!!";
    }
    mysqli_close($con);
?>
<script>
    alert('<?php echo $msg; ?>');
    location.href="painel.php";
</script>