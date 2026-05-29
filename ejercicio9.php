<?php

//Ejercicio 9: Crea una función llamada generarTablaMultiplicar que tome un número entero como parámetro y mostrar los resultados (del 1 al 10) uno debajo del otro por pantalla.
//Complejidad: BAJA (1 punto)

function generarTablaMultiplicar($num) {
    // Tu código aquí
    for ($num=0; $num <=10; $num++){
        echo "3 x $num= ". 3*$num ."<br>";
    }
}