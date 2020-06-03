<?php
    $cod = $_POST["cod"];
    $senha = $_POST["senha"];

    include_once 'conexao.php';

    $sql = "update usuario set senha='".md5($senha)."' where cod=".$cod;

    if(mysqli_query($con,$sql)){
        $msg = "Senha Atualizada com Sucesso!!";
    }else{
        $msg = "Erro ao Atualizar Senha!!";
    }

    mysqli_close($con);

    echo $sql;
?>
<script>
    alert('<?php echo $msg; ?>');
    location.href="painel.php";
</script>