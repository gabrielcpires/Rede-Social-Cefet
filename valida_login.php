<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecta ao banco de dados
    $dsn = 'mysql:host=localhost;dbname=adotecalouro;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Recebe os valores do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Busca o usuário no banco de dados
        $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        print_r($user);
        // Verifica se o usuário existe e se a senha está correta
        if ($user['senha'] == $senha) {
            // Usuário autenticado, redireciona para a página de sucesso ou outra página desejada
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['nome'];
            $_SESSION['mensagem_perfil'] = $user['descricao'];
            $_SESSION['autenticado'] = 'SIM';
            header('Location: index.php');
            exit();
        } else {
            // Usuário ou senha inválidos, redireciona de volta para a página de login com um parâmetro de erro
            $_SESSION['autenticado'] = 'NAO';
            header('Location: entrar.php?login=erro');
            exit();
        }
    } catch (PDOException $e) {
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    }
}
?>