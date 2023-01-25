<?php
    trait Carrito{
        public $strProducto;
        public $intCantidad;

        public function setCarrito(string $strProducto, int $intCantidad)
        {
            $this->strProducto = $strProducto;
            $this->intCantidad = $intCantidad;
        }

        /**
         * @return mixed
         */
        abstract public function getCarrito();

    }
