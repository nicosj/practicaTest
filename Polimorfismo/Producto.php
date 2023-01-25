<?php

class Producto
{
    public $strDescrip;
    public $fltPrecio;
    protected $intStock=10;
    protected $strStatus="Activo";

    public function __construct(string $strDescrip, float $fltPrecio)
    {
        $this->strDescrip = $strDescrip;
        $this->fltPrecio = $fltPrecio;
    }

    public function getInfoProduto()
    {
        return  $arrProducto= array(
            'producto' => $this->strDescrip,
            'Precio' => $this->fltPrecio,
            'stock_minimo' => $this->intStock,
            'estado' => $this->strStatus
        );

    }
}