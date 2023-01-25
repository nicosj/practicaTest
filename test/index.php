<?php

require_once ("usuario.php");

$objUsuarioU= new Usuario("Nico R", "nico@nico.com","admin");
$objUsuarioD= new Usuario("Pia R", "piaR@nico.com","admin");

echo $objUsuarioU->getPerfil();
echo "<br>";
echo $objUsuarioD->getPerfil();

$objUsuarioD->setStrClave("nicolasR");

echo "<br>";
echo $objUsuarioD->getPerfil();



