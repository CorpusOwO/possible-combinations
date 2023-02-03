<?php
namespace src;

class Factorial{

    // funcion que recibe un numero y devuelve su factorial
    public static function factorizar(int $n){ // n = Al numero que querramos factorizar :3
        $temp = 1; //aquí se irán almacenando el valor de las operaciones realizadas
        for($i=1 ; $i<=$n ; $i++){
            $temp = $temp * $i;
        }
        return $temp;
    }
    public static function combinaciones($n, $r){ 
        //$n = n de elementos 
        //$r = n de combinaciones

        $resta = $n - $r;	// esta variable se usa para simplificar la formula

        $n1 = Factorial::factorizar($n);
        $r1 = Factorial::factorizar($r);
        $m1 = Factorial::factorizar($resta);
        $combinaciones = $n1 / ($r1 * $m1);
        return $combinaciones;
    }
}