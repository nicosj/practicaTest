<?php

require_once "autoload.php";
class Cliente extends Persona
{
    protected  $fltCredito;
    public function __construct(int $intDni, string $strNombre, int $intEdad)
    {
        parent::__construct($intDni, $strNombre, $intEdad);
    }

    public function setCredito(string $strPuesto)
    {
        $this->fltCredito = $strPuesto;

    }
    public function getCredito():float
    {
        return $this->fltCredito;
    }
}