<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="valida_login.php" method="post">

            <div class="entrada_dados">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="entrada_dados">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>

            <button type="submit" name="enviarDados" class="btn btn-primary">Entrar</button>
            <a href="valida_cadastro.php" class="btn btn-warning">Cadastrar</a>

        </form>
    </div>
</body>
</html>