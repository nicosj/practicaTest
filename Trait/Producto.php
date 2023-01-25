<?php
    trait Producto{
        public $strProducto;
        public $fltPrecio;
        public $intStock;


        public function setProducto(string $strProducto, float $fltPrecio, int $intStock)
        {
            $this->strProducto = $strProducto;
            $this->fltPrecio = $fltPrecio;
            $this->intStock = $intStock;
        }
        public function setStock(int $Cantidad)
        {
            $this->intStock = $this->intStock - $Cantidad;
        }
        public function getProducto()
        {
            return $datos="
            <h2> Datos Prosucto</h2>
            Producto:{$this->strProducto}<br>
            Precio:{$this->fltPrecio}<br>
            sock:{$this->intStock}<br>
              
            ";
        }


    }
