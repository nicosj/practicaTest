<?php

require_once "Persona.php";
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
    public function getDatosPersonales(){
        return $datos="
            <h2> Datos Personales</h2>
            DNI:{$this->getIntDni()}<br>
            Nombre:{$this->getStrNombre()}<br>
            Edad:{$this->getIntEdad()}<br>
            Credito:{$this->getCredito()}<br>
              
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