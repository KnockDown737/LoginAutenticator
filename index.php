<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.php"/>
    <link rel="stylesheet" href="css.php"/>
    <title>LOGIN PAGE</title>
</head>
<body>

    <form method="post" action="./processo.php">
        <fieldset class="grupo">
        <div class="campo">
        <h1>FAÇA SEU LOGIN</h1>
        <br>
        <label class="campo" for="email">E-mail:</label>
        <input type="email" id="email" name="email"required>
        <div>
        </fieldset>

        <br>
        <fieldset class="grupo">
        <div class="campo">
        <label class="campo" for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <div>
        </fieldset>

        <input class="botao" type="submit" value="Login" name="login">
    </form>
   

</body>
</html>
