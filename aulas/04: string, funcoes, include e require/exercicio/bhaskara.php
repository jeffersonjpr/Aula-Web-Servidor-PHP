<?php
function delta_normal($a, $b, $c)
{
    return ($b ** 2) - (4 * $a * $c);
}
function bhaskara_normal($a, $b, $c)
{
    $delta = delta_normal($a, $b, $c);
    if ($delta < 0 or $a == 0) {
        return NULL;
    }
    $sqrt_delta = sqrt($delta);
    $x[0] = (-$b + $sqrt_delta) / (2 * $a);
    $x[1] = (-$b - $sqrt_delta) / (2 * $a);
    return $x;
}

$x = bhaskara_normal(3, 2, -5);
if ($x == NULL){
    echo "Impossivel calcular a raiz !" . "<br>";
}
else{
    echo "Bhaskara normal: x' = " . $x[0] . " x\" = " . $x[1] . "<br>";
}
