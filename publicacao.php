<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecta ao banco de dados (substitua com suas próprias credenciais)
    $dsn = 'mysql:host=localhost;dbname=adotecalouro;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id_usuario = $_SESSION['id'];
        // Recebe o valor do formulário
        $conteudo = $_POST['conteudo'];

        // Prepara e executa a query de inserção
        $stmt = $pdo->prepare('INSERT INTO publicacoes (id_usuario,texto) VALUES (?,?)');
        $stmt->execute([$id_usuario, $conteudo]);

        // Redireciona após a inserção bem-sucedida
        header('Location: index.php');
        exit();
    } catch (PDOException $e) {
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    }
}

?>
