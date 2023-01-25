<?php
require_once "Tienda.php";

$objProducto = new Tienda();

$objProducto->setProducto("Mesa", 250.5,10);
echo $objProducto->getProducto();


$objProducto->setCarrito("Mesa", 2);
$objProducto->setStock(2);
echo $objProducto->getProducto();


echo $objProducto->getCarrito();


