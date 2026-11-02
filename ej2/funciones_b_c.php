<?php

/**
 * Crea una matriz bidimensional de tantas filas y columnas como indican los parámetros de entrada. Rellena cada celda con un número aleatorio entre 0 y 10.
 * @param int $filas Número de filas.
 * @param int $cols Número de columnas.
 * @return int[][] La matriz creada.
 */
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
/**
 * Muestra una tabla HTML a partir de un array bidimensional mostrando en cada celda cada uno de los valores almacenados en el array
 * 
 * @param array $array Array bidimensional de entrada.
 * @return void
 */
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
