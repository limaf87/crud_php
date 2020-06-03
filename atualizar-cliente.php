<?php

    $cod = $_POST["cod"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $sexo = $_POST["sexo"];

    include_once 'conexao.php';

    $sql = "update cliente set nome=
    '".$nome."', email= '".$email."', cpf='".$cpf."', sexo='".$sexo."' where cod='".$cod."'";

    if(mysqli_query($con,$sql)){
        $msg = "Atualizado com Sucesso!!";
    }else{
        $msg = "Erro ao Atualizar!!";
    }
    mysqli_close();
?>
<script>
    alert('<?php echo $msg; ?>');
    location.href="painel.php";
</script>