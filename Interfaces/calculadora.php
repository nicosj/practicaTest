<?php
require_once "Calcular.php";
$objRaiz= new Calcular();
echo $objRaiz->raizCuadrada(9);

echo "<br>";

echo $objRaiz->potencia(4,3);

echo "<br>";

echo $objRaiz->op_Basicas(1,1,"/");
