<?php
require_once "Empleado.php";
require_once "Cliente.php";

$empleado= new Empleado(34243137,"Nicolas Rod", 25);
$empleado->setPuesto("admin");
$empleado->setMensaje("Bienvenido EMpleado");
echo $empleado->getMensaje();
echo $empleado->getDatosPersonales();
echo $empleado->getPuesto();
echo "<br>";
echo "---------------------";
echo "<br>";
$empleado->setMensaje("Bienvenido Cliente");
echo $empleado->getMensaje();
$cliente= new Cliente(34243137,"Chuca", 25);
$cliente->setCredito(250.5);

echo $cliente->getDatosPersonales();
