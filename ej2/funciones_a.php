<?php


function mostrarTabla(int $filas, int $cols): void
{


    echo "<table>";
    // echo "<tr>";
    // for ($i = 0; $i < $cols; $i++) {
    //     $col = $i+1;
    //     echo "<th> Col $col</th>";
    // }
    // echo "</tr>";


    for ($i = 0; $i < $filas; $i++) {
        echo "<tr>";

        for ($k = 1; $k <= $cols; $k++) {
            echo "<td>" . rand(0, 10) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


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
