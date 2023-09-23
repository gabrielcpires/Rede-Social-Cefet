<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet" />
    <title>Entrar</title>
</head>

<body>
    <div class="form-container">
        <p class="title">Entrar</p>
        <form class="form" action="valida_login.php" method="post">
            <div class="input-group">
                <label for="username">Email</label>
                <input type="text" name="email" id="username" placeholder="">
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" name="senha" id="password" placeholder="">
                <div class="forgot">
                    <a rel="noopener noreferrer" href="#">Esqueceu a senha ?</a>
                </div>
            </div>
            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                
                <p style="color: #DC3545;"> Usuário ou senha inválido(s)</p>
                

                <?php } ?>

                <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
               
                <p style="color: #DC3545;">Faça login antes de acessar as páginas protegidas!</p>
                

                <?php } ?>
            <button class="sign"> Entrar</button>
        </form>
        
        <p class="signup">Não tem uma conta?
            <a rel="noopener noreferrer" href="cadastrar.php" class="">Cadastre-se</a>
        </p>
    </div>
</body>

</html>