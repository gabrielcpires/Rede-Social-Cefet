<?php
 session_start();
//variavel que verifica autenticação
$usuario_autenticado = false;

//usuarios do sistema
$usuarios_app = array(
    array('email' => 'adm@teste.com.br' , 'senha' => '123456'),
    array('email' => 'adm2@teste.com.br' , 'senha' => '123abc'),
);


/*
echo '<pre>'; 
print_r($usuarios_app);
echo '</pre>';
*/
 
foreach ($usuarios_app as $user){

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'] ){
        $_SESSION['username'] = $_POST['username'];
        $usuario_autenticado = true;
    } 
}

if($usuario_autenticado){
    // echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    header('Location: index.php');
}else{
    $_SESSION['autenticado'] = 'NAO';
    header('Location: entrar.php?login=erro');
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