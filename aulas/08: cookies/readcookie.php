<?php
// echo $_COOKIE['utfpr'] . PHP_EOL;
session_start([
    'name' => 'UTFPR',
    'cookie_lifetime' => 4,
]);
echo $_SESSION['web'] . "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cookie e sessão</title>
</head>

<body>
    <a href="index.php">Pag inicial</a>
</body>

</html>