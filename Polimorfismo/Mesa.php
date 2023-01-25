<?php
require_once "Mueble.php";
final class Mesa extends Mueble
{
    private $strForma="";
    protected $strTamanio;
    public $strStatus="Activo";

    public function __construct(string $strDescrip, float $fltPrecio, string $strColor, string $strMaterial, string $strStatus)
    {
        parent::__construct($strDescrip, $fltPrecio, $strColor, $strMaterial, $strStatus);

        $this->strTamanio = $strDescrip;
        $this->strForma = $this->strTamanio;

    }
    public function setForma($strForma){
        $this->strForma=$strForma;
    }
    public function getInfoProduto()
    {
        return  $arrProducto= array(
            'producto' => $this->strDescrip,
            'Precio' => $this->fltPrecio,
            'stock_minimo' => $this->intStock,
            'estado'=>$this->strStatus,
            'color'=>$this->strColor,
            'material'=>$this->strMaterial,
            'forma'=>$this->strForma,
            'tamanio'=>$this->strTamanio
        );

    }



}