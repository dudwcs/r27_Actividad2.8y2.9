<?php

/**
 * Muestra una tabla HTML con tantas filas y columnas como indican los parámetros de entrada. Rellena cada posición con un número aleatorio entre 0 y 10.
 * @param int $filas Número de filas de la tabla resultado.
 * @param int $cols Número de columnas de la tabla resultado.
 * @return void
 */
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



