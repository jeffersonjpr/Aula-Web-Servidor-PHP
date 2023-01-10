<?php
if ($_POST['action'] == 'send') {
    $arquivo = fopen("arquivos/email.txt", "w");
    fwrite($arquivo, 'Nome:' . $_POST['nome'] . PHP_EOL);
    fwrite($arquivo, 'Assunto: ' . $_POST['assunto'] . PHP_EOL);
    fwrite($arquivo, 'Mensagem: ' . $_POST['mensagem'] . PHP_EOL);
    fclose($arquivo);
} else if ($_POST['action'] == 'save') {
    session_start([
        'name' => 'API3',
        'cookie_lifetime' => 4123123213,
    ]);
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['assunto'] = $_POST['assunto'];
    $_SESSION['mensagem'] = $_POST['mensagem'];
    header("Location: formulario.php");
    die();
} else {
    echo 'Erro';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="table.css">
    <title>Jefferson Prova 2</title>
</head>

<body>
    <?php include_once 'assinatura.html'; ?>
    <a href="index.php">Inicio</a> <br>
    <hr>

    <h2>Email enviado com sucesso</h2>
    <?php if ($_POST['action'] == 'send') { ?>
        <a href='arquivos/email.txt' download='email.txt'>Download back-up</a> <br>
        <?php
            session_start([
                'name' => 'API3',
                'cookie_lifetime' => 4123123213,
            ]);
            $_SESSION['nome'] = '';
            $_SESSION['assunto'] = '';
            $_SESSION['mensagem'] = '';
        ?>
    <?php } ?>

</body>

</html>