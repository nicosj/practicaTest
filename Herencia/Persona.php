<?php

class Persona
{
    public $intDni;
    public $strNombre;
    public $intEdad;

    function __construct(int $intDni, string $strNombre, int $intEdad){
        $this->intDni = $intDni;
        $this->strNombre = $strNombre;
        $this->intEdad = $intEdad;
    }

    /**
     * @return int
     */
    public function getIntDni(): int
    {
        return $this->intDni;
    }

    /**
     * @param int $intDni
     */
    public function setIntDni(int $intDni): void
    {
        $this->intDni = $intDni;
    }

    /**
     * @return string
     */
    public function getStrNombre(): string
    {
        return $this->strNombre;
    }

    /**
     * @param string $strNombre
     */
    public function setStrNombre(string $strNombre): void
    {
        $this->strNombre = $strNombre;
    }

    /**
     * @return int
     */
    public function getIntEdad(): int
    {
        return $this->intEdad;
    }

    /**
     * @param int $intEdad
     */
    public function setIntEdad(int $intEdad): void
    {
        $this->intEdad = $intEdad;
    }
    public function getDatosPersonales(){
        return $datos="
            <h2> Datos Personales</h2>
            DNI:{$this->getIntDni()}<br>
            Nombre:{$this->getStrNombre()}<br>
            Edad:{$this->getIntEdad()}<br>
              
        ";
    }

}