<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <style>

        h1 {
            padding-top: 350px;            
            font-size: 10pt;
            font-weight: normal; /* sem negrito*/
            font-family: Arial, Helvetica, sans-serif;
            padding-bottom: 10px;
        }

        button {
            height: 30px;
            width: 440px;
            background-color: rgb(15, 128, 136);
            color: mistyrose;
            border: none;
            border-radius: 5px;
        }
        body {
            margin-left: 220px;
            margin-right: 220px;
            padding: 0;
            background-color:rgb(243, 247, 247);
        }
        p1 {                       
            font-family:Arial, Helvetica, sans-serif;  
               
            margin-left: 120px;  
            display: inline-flex;                
        }
        input {
            width: 99%;
            border-radius: 4px;
            height: 30px;
            border-style: solid;
        }
        #message {
            color: #000;           
        }   
        .valid:before {
            position: relative;
            content: "✔";
            left: -10px;
        }     
        .valid{
            color:green;
        }
        .invalid:before {
            position: relative;
            left: -10px;
            content: "✖";
        }
        .invalid {
            color: red;
        }
        #for {
            margin-left: 800px;
            margin-top: -220px;
        }
        #criar {
            margin-top: 20px;
            height: 30px;
            width: 100%;
            background-color: rgb(15, 128, 136);
            color: mistyrose;
            border: none;
            border-radius: 5px
        }    
        #entrar {
            cursor: pointer;
        }      
        #cadastrar {
            cursor: pointer;
        }
        #criar {
            cursor: pointer;
        }
    </style>    
</head>
<body>
    <h1>Voltar / Cadastrar</h1>

    <a href="./entrar.php"><button id="entrar">Entrar</button></a>
    <button id="cadastrar">cadastrar</button>    

        <!--input-->
        <form method="post" action="processo.php">
            <div id="inputbody">
            <p><label>Nome de Usuário:</label></p>
            <input type="text" name="nome" id="nome" value="teste" placeholder="digite o nome ex: joao"> 
            <p><label>Email:</label></p>
            <input type="text" name="email" id="email" placeholder="digite o email ex: joao@gmail.com">
            <p><label>Senha:</label></p>
            <input type="password" name="senha" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        </form>
        
            <input id="criar" type="submit" value="Criar Conta">   
            </div>
        <!--mensagem-->
        <div id="message">
            <h3>Precisa Conter:</h3>
            <p1 id="min" class="invalid">Letras minúsculas</p>
            <p1 id="max" class="invalid">Letras maiúsculas</p>
            <p1 id="num" class="invalid">Numero </p>
            <p1 id="dig" class="invalid">No mínimo 8 digitos</p>
            <p1 id="for"></p>
        </div>

        <!--script-->
        <script>
            var password = document.getElementById("pass");
            var minimo = document.getElementById("min");
            var maximo = document.getElementById("max");
            var numero = document.getElementById("num");
            var digitos = document.getElementById("dig");
            var force = document.getElementById("for")

            //validar
            password.onkeyup = function() {

                var validmin = /[a-z]/g; //(g) search more than 1
                if(password.value.match(validmin)) {
                    minimo.classList.remove("invalid");
                    minimo.classList.add("valid");                    
                } else {
                    minimo.classList.remove("valid");
                    minimo.classList.add("invalid");
                }
                var validmax = /[A-Z]/g;
                if(password.value.match(validmax)) {
                    maximo.classList.remove("invalid");
                    maximo.classList.add("valid");
                }else {
                    maximo.classList.remove("valid");
                    maximo.classList.add("invalid");
                }
                var validnum = /[0-9]/g;
                if(password.value.match(validnum)) {
                    numero.classList.remove("invalid")
                    numero.classList.add("valid")
                } else {
                    numero.classList.remove("valid")
                    numero.classList.add("invalid")
                }
                if(password.value.length >= 8) {
                    digitos.classList.remove("invalid")
                    digitos.classList.add("valid")
                } else {
                    digitos.classList.remove("valid")
                    digitos.classList.add("invalid")
                }                               
               
            }
               /* function showResult() {
                    var a = document.getElementById("pass").value;                
                    alert(a);
                }
                */
        </script>
</body>
</html>
