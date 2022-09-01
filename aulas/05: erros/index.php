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
        set_error_handler(function($errno, $errstr, $errfile, $errline){
            echo "<h1> Erro (erro_handler): $errstr 420</h1>" . "<br>";
            echo "Erro: $errstr - $errfile - $errline";
        });

        function divisao($a, $b){
            // ini_set('display_errors', 1);
            if($b == 0){
                trigger_error("Não é possível dividir por zero", E_USER_ERROR);
            }
            return $a / $b;
        }
        
        try{
            echo divisao(10, 0);
        }catch(Exception $e){
            echo "Erro (CATCH): " . $e->getMessage() . "<br>";
        }finally{
            echo "<br>". "Executou o try (CATCH)" . "<br>";
        }
    ?>
</body>
</html>