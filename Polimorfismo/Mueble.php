<?php
require_once "Producto.php";
class Mueble extends Producto {

    public $strColor;
    public $strMaterial;
    public $strStatus="Agotado";

    public function __construct(string $strDescrip, float $fltPrecio, string $strColor,string $strMaterial,string $strStatus)
    {
        parent::__construct($strDescrip, $fltPrecio);
        $this->strColor = $strColor;
        $this->strMaterial = $strMaterial;

    }
    public function getInfoProduto()
    {
        return  $arrProducto= array(
            'producto' => $this->strDescrip,
            'Precio' => $this->fltPrecio,
            'stock_minimo' => $this->intStock,
            'estado'=>$this->strStatus,
            'color'=>$this->strColor,
            'material'=>$this->strMaterial
        );

    }

}