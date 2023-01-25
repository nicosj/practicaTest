<?php
    require_once "Operacion.php";
    require_once "OperaccionesBasicas.php";
    class Calcular implements Operacion, OperaccionesBasicas{

        public function raizCuadrada(float $fltNumero): float
        {
            // TODO: Implement raizCuadrada() method.
            return sqrt($fltNumero);
        }

        public function potencia(int $numero, int $potencia): int
        {
            // TODO: Implement potencia() method.
            return pow($numero,$potencia);
        }

        public function op_Basicas(float $numero1, float $numero2, string $operador): float
        {
            // TODO: Implement op_Basicas() method.

            if($operador=="+") {
                return $numero1 + $numero2;
            }elseif ($operador=="-") {
                return $numero1 - $numero2;
            }elseif ($operador=="*") {
                return $numero1 * $numero2;
            }elseif ($operador=="/") {
                return $numero1 / $numero2;
            }
            else{
                return 0;
            }
        }
    }