<?php
session_start();
include("conexao.php");

    $usuario = mysqli_real_escape_string($conectar, $_POST['email']);
    $senha = mysqli_real_escape_string($conectar, $_POST['senha']);    


$query = "SELECT * FROM surfista WHERE email = '$usuario' && senha = '$senha'";
$result = mysqli_query($conectar, $query);
$resultado = mysqli_fetch_assoc($result);


if(isset($resultado)){    
    header("Location: usuario.php");
    $_SESSION['userEmail'] = $resultado['email'];
    $_SESSION['userNome'] = $resultado['nome'];
}else {
    header("Location: entrar.php");
}   