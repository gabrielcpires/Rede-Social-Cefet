<?php
 session_start();
//variavel que verifica autenticação
$usuario_autenticado = false;


// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecta ao banco de dados (substitua com suas próprias credenciais)
    $dsn = 'mysql:host=localhost;dbname=adotecalouro;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Recebe os valores do formulário
        $nome = $_POST['username'];
        $email = $_POST['email'];
        $senha = $_POST['senha']; 

        // Prepara e executa a query de inserção
        $stmt = $pdo->prepare('INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)');
        $stmt->execute([$nome, $email, $senha]);

        // // Redireciona após a inserção bem-sucedida
        // header('Location: pagina_sucesso.php');
        header('Location: entrar.php');
        exit();
    } catch (PDOException $e) {
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    }
}

/*
    print_r($_GET);

    echo '<br>';
    echo $_GET['email'];
    echo '<br>';
    echo $_GET['senhal'];ad
    
    print_r($_POST);

    echo '<br>';
    */
    
?>