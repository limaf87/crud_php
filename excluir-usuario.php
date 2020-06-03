<?php
    $cod = $_GET["cod"];

    include_once 'conexao.php';

    $sql = "delete from usuario where cod=".$cod;

    if(mysqli_query($con,$sql)){
        $msg = "Usuário excluido com sucesso!!";
    }else{
        $msg = "Erro ao excluir!!";
    }
    mysqli_close($con);
?>
<script>
    alert('<?php echo $msg; ?>');
    location.href="painel.php";
</script>