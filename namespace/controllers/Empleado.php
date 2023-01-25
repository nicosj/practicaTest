<?php
namespace controllers;
require_once "../autoload.php";
use models\Persona;
class Empleado extends Persona
{
    protected  $strPuesto;
    public function __construct(int $intDni, string $strNombre, int $intEdad)
    {
        parent::__construct($intDni, $strNombre, $intEdad);
    }

    public function setPuesto(string $strPuesto)
    {
        $this->strPuesto = $strPuesto;

    }
    public function getPuesto():string
    {
        return $this->strPuesto;
    }


}