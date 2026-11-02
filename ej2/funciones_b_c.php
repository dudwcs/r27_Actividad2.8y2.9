<?php


function crearMatriz(int $filas, int $cols): array
{
    $resultado = [];
    for ($i = 0; $i < $filas; $i++) {
        for ($k = 0; $k < $cols; $k++) {
            $resultado[$i][$k] = rand(0, 10);
        }
    }
    return $resultado;
}

function mostrarMatriz(array $array): void
{

    echo "<table>";
    foreach ($array as $fila) {
        echo "<tr>";
        foreach ($fila as $value) {
            echo "<td> $value </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
