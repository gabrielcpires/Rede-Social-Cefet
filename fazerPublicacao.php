<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Publicação</title>
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .custom-form {
            background-color: #E0E1DD;
            /* Cor do formulário */
            padding: 40px;
            border-radius: 15px;
            max-width: 600px;
            width: 100%;
            text-align: center; /* Centraliza o texto dentro do formulário */
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: none;
            border-radius: 5px;
            resize: vertical; /* Permite que o usuário redimensione verticalmente */
        }

        input[type="submit"] {
            background-color: #fff;
            /* Cor do botão de envio */
            color: #515151;
            /* Cor do texto do botão de envio */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-title {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php include "menu.inc"; ?>
    <? require_once "validador_acesso.php"; ?>

    <div class="center-container">
        <div class="custom-form">
            <h2 class="form-title">Faça sua publicação:</h2>
            <form action="publicacao.php" method="post">
                <textarea name="conteudo" placeholder="Digite seu conteúdo aqui" rows="8" required></textarea>
                <br>
                <div class="l2">
            <button>Publicar</button>
          </div>
            </form>
        </div>
    </div>
</body>

</html>
