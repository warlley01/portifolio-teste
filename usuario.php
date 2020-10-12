<?php 
session_start();
include('verificar.php');
//echo "Ola ". $_SESSION['userNome'];
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <style>
        h4 {
            font-size: 15pt;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        #anuncios {                        
            margin-left: 130px;
            padding-right: 10px;
            background-color:rgb(255, 255, 255);
            border: solid;
            border-width: 1px;
            border-radius: 5px;
            border-color:darkgray;
            padding-left: 20px;
            padding-bottom: 40px;
            width: 720px;     
            position: relative;   
            display: inline-block;    
             font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }
        body {
            background-color: rgb(240, 240, 245);            
        }
        #pagina {
            margin-top: 110px;    
            position: relative;        
        }
        #painel {     
            background-color:rgb(255, 255, 255);           
            border-spacing: 1px;            
            position: relative;    
            border: solid;
            border-width: 1px;
            border-radius: 5px;
            border-color: darkgray;
            padding-left: 20px;
            width: 350px;             
            margin-top: -208px;     
            margin-left: 900px;    
            font-family: 'Courier New', Courier, monospace;    
            font-size: 11pt;   
            height: 200px;    
            top: 0;
            height: 100%;        
        } 
        #painel2 {
            background-color:rgb(255, 255, 255);
            border-spacing: 1px;            
            position: relative;    
            border: solid;
            border-width: 1px;
            border-radius: 5px;
            border-color: darkgray;
            padding-left: 20px;
            width: 350px;             
            margin-top: 10px;     
            margin-left: 900px;    
            font-family: 'Courier New', Courier, monospace;    
            font-size: 11pt;   
            height: 200px;    
            top: 0;
            height: 100%;  
        }
        #painel3 {
            background-color:rgb(255, 255, 255);
            border-spacing: 1px;            
            position: relative;    
            border: solid;
            border-width: 1px;
            border-radius: 5px;
            border-color: darkgray;
            padding-left: 20px;
            width: 350px;             
            margin-top: 10px;     
            margin-left: 900px;    
            font-family: 'Courier New', Courier, monospace;    
            font-size: 11pt;   
            height: 200px;    
            top: 0;
            height: 100%;  
        }
        h4 {
            color:rgb(19, 19, 61);
        }     
        a:link {
            text-decoration: none;
        } 
        a:visited {
            color: black;            
        } 
    </style>
</head>
<body>
    <div id="pagina">
        <div id="anuncios">
            <h4>Meus Anúncios</h4>
            <p>Abaixo você encontrará uma listagem de todos os seus anúncios classificados. Clique em uma das opções para <br>
            executar uma tarefa específica. Se você tiver alguma dúvida, entre em contato com o administrador do site </p>
            <p>Neste momento você não tem anúncios</p>
        </div>
        <div id="painel">
            <h4>Meu Painel</h4>
            <p><a href="usuario.php">> Meus Anúncios</a></p>
            <p>> Minhas Ordens</p>
            <p><a href="painel.html">> Editar Perfil</a></p>
            <p><a href="logout.php">> Sair</a></p>
        </div>
        <div id="painel2">
            <h4>Informações da Conta</h4>
            <!-- <p><?php$_SESSION['userNome']?></p> -->
            <p>membro desde</p>
            <p>ultimo acesso</p>
            <p>email: </p>
        </div>
        <div id="painel3">
            <h4>Estatísticas da Conta</h4>
            <p>Mais recentes: </p>
            <p>Anúncios pendentes: </p>
            <p>Anúncios offline: </p>
            <p>Todos os anúncios: </p>
        </div>
    </div>
</body>
</html>