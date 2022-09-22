<?php
// $expires = time() + 4;
// setcookie('utfpr','Web Servidor', $expires);
// session_destroy();
session_start([
    'name' => 'UTFPR',
    'cookie_lifetime' => 4,
]);
$_SESSION['web'] = 'Olá Mundo';

?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Cookie e sessão</title>
</head>

<body>
<a href="readcookie.php">Ler Cookie</a>
</body>

</html>