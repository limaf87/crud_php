<?php
    

    $cod = $_GET["cod"];

    include_once 'conexao.php';

    $sql = "delete from cliente where cod=".$cod;

    if(mysqli_query($con, $sql)){
        $msg = "Cliente excluido com Sucesso!!";
    } else {
        $msg = "Erro ao Excluir!!";
    }
    mysqli_close($con);
?>
<script>
    alert('<?php echo $msg; ?>');
    location.href="painel.php";
</script>