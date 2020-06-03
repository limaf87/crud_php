<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="row">
            <div class="col s12 m4 offset-m4">
                <div class="card">
                    <div class="card-action teal lighten-1 white-text">
                        <h3>Área Restrita</h3>
                    </div>
                    <div class="card-content">
                        <form action="verificar-login.php" method="post">
                            <div class="form-field">
                                <label for="login">Usuário</label>
                                <input type="text" name="login" id="login">
                            </div><br />

                            <div class="form-field">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" id="senha">
                            </div><br />
                            <div class="form-field">
                                <input type="submit" value="Entrar" class="btn-large white-text" style="width:100%;">
                            </div> <br />
                            <p>
                                <?php 
                                    if(isset($_GET["msg"])){
                                        $msg = $_GET["msg"];
                                        echo $msg;
                                    }
                                    
                                ?>
                            </p>   
                        </form>
                </div>        
            </div>    
        </div>
    </div>
</body>
</html>