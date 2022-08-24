<?php

$palavra_forca = "forca";
$palavra_ocultada = "";

$letras_erradas = "";
$tentativas = 5;

##input palavra secreta
$palavra_forca = readline("Digite a palavra secreta: ");
system('clear');

foreach (str_split($palavra_forca) as $valor) {
    $palavra_ocultada .= "_";
}

while ($tentativas > 0 && $palavra_ocultada != $palavra_forca) {
    $letra = readline("Digite uma letra: ");
    $letra = $letra[0];
    $letra = strtolower($letra);

    #continue if letra inside $letras_erradas
    if (strpos($letras_erradas, $letra) !== false or strpos($palavra_ocultada, $letra) !== false) {
        echo "Você já digitou essa letra. Tente outra vez.\n";
        sleep(1);
        system('clear');
    } else {
        $pos = strpos($palavra_forca, $letra);
        if ($pos === false) {
            $letras_erradas .= $letra;
            $tentativas--;
        } else {
            // $palavra_ocultada[$pos] = $letra;
            # for each occurence replace
            $palavra_ocultada = str_replace($letra, $letra, $palavra_ocultada);
        }
    }
    system('clear');
    echo "Palavra: " . $palavra_ocultada . PHP_EOL;
    echo "Letras erradas: " . $letras_erradas . PHP_EOL;
    echo "Tentativas: " . $tentativas . PHP_EOL;
}

if ($palavra_ocultada == $palavra_forca) {
    echo "Parabéns, você ganhou!\n";
} else {
    echo "Você perdeu!\n";
}