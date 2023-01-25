<?php
class Usuario{

    private $strNombre;
    private $strEmail;
    private $strTipo;
    private string $strClave;
    protected $strFechaRegistro;
    static $strEstado="Activo";

    public function __construct(string $strNombre, string $strEmail, string $strTipo){

        $this->strNombre = $strNombre;
        $this->strEmail = $strEmail;
        $this->strTipo = $strTipo;

        $this->strFechaRegistro = date("Y-m-d h:m:s");
        $this->strClave = rand();
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
     * @return string
     */
    public function getStrEmail(): string
    {
        return $this->strEmail;
    }

    /**
     * @param string $strEmail
     */
    public function setStrEmail(string $strEmail): void
    {
        $this->strEmail = $strEmail;
    }

    /**
     * @return string
     */
    public function getStrTipo(): string
    {
        return $this->strTipo;
    }

    /**
     * @param string $strTipo
     */
    public function setStrTipo(string $strTipo): void
    {
        $this->strTipo = $strTipo;
    }

    /**
     * @return int
     */
    public function getStrClave(): string
    {
        return $this->strClave;
    }

    /**
     * @param int $strClave
     */
    public function setStrClave(string $strClave): void
    {
        $this->strClave = $strClave;
    }

    /**
     * @return mixed
     */
    public function getStrFechaRegistro()
    {
        return $this->strFechaRegistro;
    }

    /**
     * @param mixed $strFechaRegistro
     */
    public function setStrFechaRegistro($strFechaRegistro): void
    {
        $this->strFechaRegistro = $strFechaRegistro;
    }

    /**
     * @return string
     */
    public static function getStrEstado(): string
    {
        return self::$strEstado;
    }

    /**
     * @param string $strEstado
     */
    public static function setStrEstado(string $strEstado): void
    {
        self::$strEstado = $strEstado;
    }

    public function getPerfil(){
        echo "Datos del usuario </br>";
        echo "<b>Nombre: </b>". $this->getStrNombre();
        echo "<br>";
        echo "<b>Email: </b>". $this->getStrEmail();
        echo "<br>";
        echo "<b>Tipo: </b>". $this->getStrTipo();
        echo "<br>";
        echo "<b>Clave: </b>". $this->getStrClave();
        echo "<br>";
        echo "<b>Fecha Registro: </b>". $this->getStrFechaRegistro();
        echo "<br>";
        echo "<b>Estado: </b>". $this->getStrEstado();
        echo "<br>";

    }


}