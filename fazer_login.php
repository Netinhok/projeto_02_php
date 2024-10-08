<?php
include "conexao.php";
$usuario = $_POST['usuario_digitado'];
$senha = $_POST['senha_digitada'];

//1º Passo - Comando SQL
$sql = "SELECT * FROM tb_usuarios
        WHERE username='$usuario'
        AND password='$senha'";

//2º Passo - Preparar a conexão
$consultar = $pdo->prepare($sql);

//3º Passo - Tentar executar
try{
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
    if($resultado){
        session_start();
        $_SESSION['logado'] = 'Sim';
        header("Location: index.php");
    }else{
        header('Location: login.php?erro1=sim');
    }
}catch(PDOException $erro){
    echo "Falha no login! ".$erro->getMessage();
}

?>