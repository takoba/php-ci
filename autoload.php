<?php

function loader($class)
{
    $file = __DIR__ . '/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('loader');
