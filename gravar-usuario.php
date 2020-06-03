<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $perfil = $_POST["perfil"];

    include_once 'conexao.php';

    $sql = "insert into usuario values(null,'".$nome."','".$email."','".$login."','".md5($senha)."','".$perfil."')";

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