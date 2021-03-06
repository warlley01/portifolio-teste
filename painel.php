<?php
    include_once("conexao.php");
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
        #perfil {                        
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
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            height: 100%;
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
            margin-top: -626px;     
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
        input {
            width: 97%;
            background-color: rgb(248, 247, 247);
            border-radius: 5px;
            border-width: 2px;
            height: 30px;
            margin-top: 5px;
            border-style: solid;  
            position: relative;
            display: inline-block;                 
        }   
        #inp2,#inp3,#inp4,#inp6,#inp5,#inp7 {
            width: 45%;
            background-color: rgb(248, 247, 247);
            border-radius: 5px;
            border-width: 2px;
            height: 30px;
            margin-top: 5px;
            border-style: solid; 
            margin-right: 20px;
            float: left;  
            margin-bottom: 10px;                          
        }   
        input, label {
            display: block;            
        }
        #pnome {
            margin-top: 20px;            
        }
        #snome {
            margin-top: -20px;
            margin-left: 350px;
        }  
        a:link {
            text-decoration: none;
        }      
        a:visited {
            color: black;
        }
        #atualizar {
            background-color: rgb(15, 128, 136);
            color:rgb(248, 247, 247);
            height: 35px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="pagina">
        <div id="perfil">
            <h4>Editar Perfil</h4>
            <label>Nome de usuario</label>
            <input type="text" name="nome" id="inp" onclick="borderChange(this.id)">
            <label id="pnome">Primeiro Nome</label>
            <input type="text" id="inp2" name="primenome" onclick="borderChange(this.id)">
            <label id="snome">Sobrenome</label>
            <input type="text" id="inp3" name="sobrenome"onclick="borderChange(this.id)">
            <label>Apelido</label>
            <input type="text" id="inp4" name="apelido" onclick="borderChange(this.id)">
            <label>Email</label>
            <input type="text" id="inp5" name="email" onclick="borderChange(this.id)">
            <label>site</label>
            <input type="text" id="inp6" name="site" onclick="borderChange(this.id)">
            <label>facebook</label>
            <input type="text" id="inp7" name="facebook" onclick="borderChange(this.id)">
            <label>sobre mim</label>
            <input type="text" id="inp8" name="sobre" onclick="borderChange(this.id)">
            <label>nova senha</label>
            <input type="password" id="inp9" name="newsenha" onclick="borderChange(this.id)">
            <label>senha novamente</label>
            <input type="password" id="inp10" name="confirmsenha" onclick="borderChange(this.id)">
            <input type="button" id="atualizar" value="Atualizar">
        </div>
        <div id="painel">
            <h4>Meu Painel</h4>
            <p><a href="usuario.php">> Meus Anúncios</a></p>
            <p>> Minhas Ordens</p>
            <p>> Editar Perfil</p>
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
    <script>
        
            function borderChange(clicked) {        
                document.getElementById(clicked).style.borderWidth = '3px'
                document.getElementById(clicked).style.borderColor = 'rgb(130, 236, 255)'
            }
       
            function borderNormal(clicked) {
                document.getElementById(!clicked).style.borderColor = 'black'
            }
        
    </script>
</body>
</html>
