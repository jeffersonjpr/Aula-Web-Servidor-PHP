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
            ini_set('display_errors', 1);
            if($b == 0){
                throw new Exception("Não é possível dividir por zero");
            }
            return $a / $b;
        }
        
        try{
            echo divisao(10, 0);
        }catch(Exception $e){
            echo "Erro: " . $e->getMessage() . "<br>";
        }finally{
            echo "Executou o try" . "<br>";
        }
    ?>
</body>
</html>