<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


//Inserir dados no Banco

$senha = md5($senha);
$dados = "INSERT INTO surfista (nome,email,senha) VALUES ('$nome', '$email', '$senha')";
$resultado = mysqli_query($conectar, $dados);

if (mysqli_insert_id($conectar)) {
    header("Location: cadastrar.php");
} else {
    header("Location: cadastrar.php");
}
