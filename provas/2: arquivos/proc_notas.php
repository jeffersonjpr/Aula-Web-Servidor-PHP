<?php
$file_path = $_FILES['notas']['tmp_name'];
$file_name = $_FILES['notas']['name'];

move_uploaded_file($file_path, "arquivos/$file_name");
$file = file_get_contents("arquivos/$file_name");
$notas = explode("\n", $file);

$apg = array_pop($notas);
$sum_notas = array_sum($notas) * 2;
$average = ($sum_notas + $apg) / 9;

$arquivo = fopen("arquivos/resposta.csv", "w");
fwrite($arquivo, 'Nome,' . $_POST['name'] . PHP_EOL);
fwrite($arquivo, 'RA,' . $_POST['ra'] . PHP_EOL);
fwrite($arquivo, 'Sexo,' . $_POST['sexo'] . PHP_EOL);
fwrite($arquivo, 'Cidade,' . $_POST['cidade'] . PHP_EOL);
fwrite($arquivo, 'UF,' . $_POST['uf'] . PHP_EOL);
fwrite($arquivo, 'API1,' . $notas[0] . PHP_EOL);
fwrite($arquivo, 'API2,' . $notas[1] . PHP_EOL);
fwrite($arquivo, 'API3,' . $notas[2] . PHP_EOL);
fwrite($arquivo, 'API4,' . $notas[3] . PHP_EOL);
fwrite($arquivo, 'APIG,' . $apg . PHP_EOL);
fwrite($arquivo, 'NF,' . $average . PHP_EOL);
fclose($arquivo);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="table.css">
    <title>Jefferson Prova 2</title>
</head>

<body>
    <h1>Avaliação Prática Individual 2</h1>
    <h2>Jefferson Michael de Azevedo Junior</h2>
    <h3>Ra: 2058979</h3>
    <hr>
    <h2>Formulário enviado com sucesso</h2>
    <a href='arquivos/resposta.csv' download='resposta.csv'>Download</a>
</body>
</html>