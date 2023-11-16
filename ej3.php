<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

function obtenerPares($numeros) {
    $pares = [];
    foreach ($numeros as $value) {
        if ($value > 5 && $value < 15 && $value % 2 == 0) {
            array_push($pares, $value);
        }
    }
    return $pares;
}

$resultado = obtenerPares($numeros);
var_dump($resultado);
?>


