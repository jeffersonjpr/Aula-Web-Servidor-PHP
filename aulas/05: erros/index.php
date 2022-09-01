<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erros</title>
</head>
<body>
    <h1>Erros tratamentos   </h1>
    <?php
        function divisao($a, $b){
            if($b == 0){
                trigger_error("Não é possível dividir por zero", E_USER_ERROR);
            }
            return $a / $b;
        }
        echo divisao(10, 0);    
    ?>
</body>
</html>