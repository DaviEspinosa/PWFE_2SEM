<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--
    Nome Completo
    Data de Nascimento
    Telefone
    E-mail
    Senha-->
    <div class="container">
        <h1>Cadastrar Novo Usuario</h1>
        <form action="valida_usuario.php" method="post">

            <div class="entrada_dados">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="entrada_dados">
                <label for="nome">Data de Nascimento</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="entrada_dados">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" class="form-control">
            </div>

            <div class="entrada_dados">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="entrada_dados">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>

            <button type="submit" name="enviarDados" class="btn btn-primary">Entrar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
        </form>
        
    </div>
</body>

</html>