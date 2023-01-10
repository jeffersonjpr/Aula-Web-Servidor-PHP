<?php
session_start([
    'name' => 'API3',
    'cookie_lifetime' => 4123123213,
]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php include_once 'assinatura.html'; ?>
    <a href="index.php">Inicio</a> <br>
    <hr>
    
    <form method="post" action="proc_email.php" enctype="multipart/form-data">
        <input type="text" name="nome" value="<?php echo $_SESSION['nome'] ?>" required> <br>
        <input type="text" name="assunto" value="<?php echo $_SESSION['assunto'] ?>"> <br>
        <input type="" name="mensagem" value="<?php echo $_SESSION['mensagem'] ?>" required> <br>
        <button type="submit" name="action" value="send">Enviar</button>
        <button type="submit" name="action" value="save">Salvar</button>
    </form>
</body>

</html>