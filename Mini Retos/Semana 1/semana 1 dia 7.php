<?php
function calcular ($a,$b, $operacion) {
    switch ($operacion){
        case "suma":
        return $a + $b;
        case "resta":
           return $a - $b;
        case "multiplicacion":
            return $a * $b;
            case "division":
                return ($b != 0 ) ? $a / $b : "Error: division por cero";
                default:
                return "oprecion no valida"; 
    }
}


   
?>