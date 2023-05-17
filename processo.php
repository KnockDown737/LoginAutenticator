
 <?php 

 require_once './enviaEmail.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUPLO FATOR</title>
</head>
<body>
    
<form method="post" action="./valida.php">
        <h1>Coloque o token enviado para caixa de email!</h1>
        <br>
        <label for="token">Token:</label>
        <input type="text" id="token" name="token">
        <br>
        <br>

        <input type="submit" value="Login" name="login">
    </form>

</body>
</html> 



