<?php
 session_start();

  require_once "validador_acesso.php";
    $_SESSION['mensagem_perfil'] = $_POST['editar-texto'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecta ao banco de dados
    $dsn = 'mysql:host=localhost;dbname=adotecalouro;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Recebe o novo valor da descrição do formulário
        $nova_descricao = $_POST['editar-texto'];

        // Atualiza a descrição no banco de dados
        $stmt = $pdo->prepare('UPDATE usuarios SET descricao = ? WHERE id = ?');
        $stmt->execute([$nova_descricao, $_SESSION['id']]);

        // Atualiza a variável de sessão com a nova descrição
        $_SESSION['mensagem_perfil'] = $nova_descricao;

        // Redireciona para a página de perfil ou outra página desejada
        header('Location: perfil.php');
        exit();
    } catch (PDOException $e) {
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    }
}

    
?>