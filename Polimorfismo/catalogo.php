<?php

require_once "Mesa.php";

$objcama = new Producto("Mesa de 1.50", 100);
$al= $objcama->getInfoProduto();
print_r('<pre>');
print_r($al);
print_r('</pre>');

$objmueble = new Mueble("Mesa de 1.50", 100, "Blanco", "Madera", "Activo");
$al= $objmueble->getInfoProduto();
print_r('<pre>');
print_r($al);
print_r('</pre>');
//$objMesa = new Mesa("Mesa de 1.50", 100, "Blanco", "Madera", "Activo");

$objmesa = new Mesa("Mesa de 1.50", 100, "Blanco", "Madera", "3mt");
$objmesa->setForma("Redonda Cubo");
$al= $objmesa->getInfoProduto();
print_r('<pre>');
print_r($al);
print_r('</pre>');