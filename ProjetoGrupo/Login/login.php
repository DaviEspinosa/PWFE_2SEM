<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    
</head>

<body>
    <div class="main">
    <form id="loginForm">
            
            <h3 class="cabecalho">Login</h3>
            <hr>
            <div class="login">

                <div class="div">

                    <label for="l-email"></label>
                    <input type="email" placeholder="E-mail" id="email">
                    <span id="emailError" style="color: red;"></span>
                    
                    <label for="l-password"></label>
                    <input type="password" placeholder="Senha" id="password">
                    <span id="passwordError" style="color: red;"></span>

                </div>
                <p>Ainda não tem uma conta? <a href="#" onclick="mostrarCadastro()">Cadastre-se</a></p>
                <input type="button" value="Enviar" class="button" onclick="validateForm()">
            </div>
            
        </form>


        <form id="cadastroForm">
            
            <h3 class="cabecalho">Cadastro</h3>
            <hr>
            <div class="cadastro">

                <div class="div">

                    <label for="l-name"></label>
                    <input type="" placeholder="Nome Completo*">
                    <input type="" placeholder="CPF*">

                    <label for="l-email"></label>
                    <input type="" placeholder="Endereço*">

                    <label for="l-email"></label>
                    <input type="email" placeholder="E-mail*">

                <div class="password">
                    <label for="l-password"></label>
                    <input type="password" placeholder="Senha*">
                    <label for="l-confirm-password"></label>
                    <input type="password" placeholder="Confirme sua Senha*">
                    </div>
                </div>
                <input type="button" value="Enviar" class="button">
            </div>
            
        </form>
       
    </div>

</body>
<script src="login.js"></script>
<script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>
</html>