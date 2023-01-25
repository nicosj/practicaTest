<?php
require_once "Persona.php";

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

    public function getDatosPersonales(){
        return $datos="
            <h2> Datos Personales</h2>
            DNI:{$this->getIntDni()}<br>
            Nombre:{$this->getStrNombre()}<br>
            Edad:{$this->getIntEdad()}<br>
              
        ";
    }
    public function setMensaje(string $strMensaje){
        $this->strMensaje = $strMensaje;
    }
    public function getMensaje(): string
    {
        // TODO: Implement getMensaje() method.
        return $this->strMensaje."".$this->strNombre;
    }
}