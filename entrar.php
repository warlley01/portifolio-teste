<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <style>
       body {
            margin-left: 220px;
            margin-right: 220px;
            padding: 0;
       }
       button {
            height: 30px;
            width: 440px;
            background-color: rgb(15, 128, 136);
            color: mistyrose;
            border: none;
            border-radius: 5px;
       }
       #logar {
            margin-top: 20px;
            height: 30px;
            width: 100%;
            background-color: rgb(15, 128, 136);
            color: mistyrose;
            border: none;
            border-radius: 5px
       }
       h1 {
            padding-top: 350px;            
            font-size: 10pt;
            font-weight: normal; /* sem negrito*/
            font-family: Arial, Helvetica, sans-serif;
            padding-bottom: 10px;
       }
       input {
            width: 99%;
            border-radius: 4px;
            height: 30px;
            border-style: solid;
       }
       #esqueci {
            float: right;
            margin-top: 17px;   
       }                  
       #conectado {
           width: 20px;
           margin-top: 11px;
       }
       #conect {  
           position: absolute;         
           margin-top: 17px;
           margin-left: 10px;
       }  
       #logar {
            cursor: pointer;
       }     
       #cadastrar {
          cursor: pointer;
       }
       #entrar {
            cursor: pointer;
       }
    </style>
</head>
<body>
    <h1>Voltar / Entrar></h1>
    <a href="./entrar"><button id="entrar">Entrar</button></a>
    <a href="./cadastrar.php"><button id="cadastrar">Cadastrar</button></a>
    
    <form action="login.php" method="POST">
        <p><label>Nome de Usuário:</label></p>
        <input type="text" id="nome" name="email">
        <p><label>Senha:</label></p>
        <input type="password" id="pass" name="senha">
        
        <input type="checkbox" id="conectado" valor="Continuar Conectado">
        <label id="conect" for="conectado">Continuar Conectado</label>
        
        <label id="esqueci">Esqueci minha senha</label>
        <input id="logar" type="submit" value="Entrar">
    </form>
    
    <script>
        
    </script>
</body>
</html>