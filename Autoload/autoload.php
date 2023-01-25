<?php

function autoload($class)
{
    $class = str_replace('\\', '/', $class);
    require_once $class . '.php';
    echo $class. ' cargado'." <br>";
}
spl_autoload_register('autoload');
