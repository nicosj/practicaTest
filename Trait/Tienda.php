<?php
require_once "Carrito.php";
require_once "Producto.php";


class Tienda
{
    use   Carrito, Producto;
    public $flTotal=0;

    public function getCarrito()
    {
         $this->flTotal = $this->fltPrecio * $this->intCantidad;

         $infoCarrito="
            <h2> Carrito</h2>
            <hr>
            Producto:{$this->strProducto}<br>
            Cantidad:{$this->intCantidad}<br>
            Precios:{$this->fltPrecio}<br>
            Total:{$this->flTotal}<br>
         ";
         return $infoCarrito;

    }
}