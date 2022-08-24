<?php
    $aarray = array(1,2,3,4,5,6,7,8,9,10);
    $cochetes = [11,22,33,44,55,66,77,88,99,100];

    foreach ($aarray as $valor) {
        echo $valor . PHP_EOL;
    }
    foreach ($cochetes as $valor) {
        echo $valor . PHP_EOL;
    }

    print_r($aarray); #print_r mostra o conteúdo do array 

    var_dump($aarray); #var_dump mostra o conteúdo do array e o tipo de dado

    $dicionario = array(
        "nome" => "João",
        "idade" => 20,
        "cidade" => "São Paulo"
    );
    echo $dicionario['nome'] . PHP_EOL;

    unset($dicionario['idade']); # remove a chave idade do dicionário
    print_r($dicionario);
