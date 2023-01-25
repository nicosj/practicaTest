<?php
require_once "Empleado.php";
require_once "Cliente.php";

$empleado= new Empleado(34243137,"Nicolas Rod", 25);
$empleado->setPuesto("admin");

echo $empleado->getDatosPersonales();
echo $empleado->getPuesto();

$cliente= new Cliente(34243137,"Nicolas Rod", 25);
$cliente->setCredito(250.5);

echo $cliente->getDatosPersonales();
echo $cliente->getCredito();