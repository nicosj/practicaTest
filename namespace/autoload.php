<?php

function autoload($class)
{
    $class = str_replace('\\', '/', $class);
    require_once $class . '.php';

}
spl_autoload_register('autoload');
