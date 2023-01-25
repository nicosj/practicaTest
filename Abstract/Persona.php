<?php

abstract class Persona
{
    public $intDni;
    public $strNombre;
    public $intEdad;
    public $strMensaje;

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
    abstract public function getDatosPersonales();
    abstract public function setMensaje(string $strPuesto);
    abstract public function getMensaje():string;

}