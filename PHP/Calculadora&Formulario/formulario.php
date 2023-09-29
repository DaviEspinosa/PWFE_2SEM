<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="formulario.css">

</head>
<body>
<form method="POST" action="recebe_dados.php">

    <div align="center">
        <center>
            <p>Username:<input type="text" name="username" size="10">&nbsp;&nbsp;
                Senha:<input type="password" name="senha" size="10"></p>
        </center>
    </div>

    <div align="center">
        <center>
            <p>Nome:<input type="text" name="nome" size="20"></p>
        </center>
    </div>

    <div align="center">
        <center>
            <p>E-mail:<input type="text" name="email" size="20"></p>
        </center>
    </div>

    <div align="center">
        <center>
            <p>Cidade:<input type="text" name="cidade" size="20">&nbsp;&nbsp;
                Estado:<input type="text" name="estado" size="2" maxlength="2"></p>
        </center>
    </div>

    <div align="center">
        <center>
            <p><button type="submit" name="enviar" value="Enviar">Enviar</button></p>
        </center>
    </div>
</form>

</body>
</html><?php
